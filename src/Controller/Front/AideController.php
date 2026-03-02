<?php

namespace App\Controller\Front;

use App\Entity\FAQ;
use App\Entity\SupportTicket;
use App\Entity\SupportFeedback;
use App\Entity\ChatMessage;
use App\Repository\FAQRepository;
use App\Repository\SupportTicketRepository;
use App\Repository\SupportFeedbackRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/aide')]
class AideController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly ValidatorInterface $validator
    ) {}

    #[Route('', name: 'aide')]
    public function index(FAQRepository $faqRepository): Response
    {
        $popularFaqs = $faqRepository->getPopular(5);
        $categories = $faqRepository->getCategories();

        return $this->render('front/aide/index.html.twig', [
            'popularFaqs' => $popularFaqs,
            'categories' => $categories,
        ]);
    }

    #[Route('/faq', name: 'aide_faq')]
    public function faq(Request $request, FAQRepository $repository): Response
    {
        $search = $request->query->get('search');
        $category = $request->query->get('category');

        if ($search) {
            $faqs = $repository->search($search);
        } elseif ($category) {
            $faqs = $repository->findByCategory($category);
        } else {
            $faqs = $repository->findPublished();
        }

        $categories = $repository->getCategories();

        return $this->render('front/aide/faq.html.twig', [
            'faqs' => $faqs,
            'categories' => $categories,
            'search' => $search,
            'currentCategory' => $category,
        ]);
    }

    #[Route('/faq/{id}/view', name: 'aide_faq_view')]
    public function viewFaq(FAQ $faq): Response
    {
        $faq->incrementViewCount();
        $this->entityManager->flush();

        return $this->json(['success' => true]);
    }

    #[Route('/faq/{id}/helpful', name: 'aide_faq_helpful', methods: ['POST'])]
    public function markHelpful(FAQ $faq): Response
    {
        $faq->incrementHelpfulCount();
        $this->entityManager->flush();

        return $this->json(['success' => true, 'count' => $faq->getHelpfulCount()]);
    }

    #[Route('/support', name: 'aide_support')]
    public function support(Request $request, SupportTicketRepository $ticketRepository): Response
    {
        $userEmail = $request->getSession()->get('user_email', '');
        
        $tickets = [];
        if ($userEmail) {
            $tickets = $ticketRepository->findByUserEmail($userEmail);
        }

        return $this->render('front/aide/support.html.twig', [
            'tickets' => $tickets,
            'userEmail' => $userEmail,
        ]);
    }

    #[Route('/support/new', name: 'aide_support_new', methods: ['GET', 'POST'])]
    public function newTicket(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $ticket = new SupportTicket();
            $ticket->setSubject($request->request->get('subject'));
            $ticket->setDescription($request->request->get('description'));
            $ticket->setCategory($request->request->get('category', 'general'));
            $ticket->setPriority($request->request->get('priority', SupportTicket::PRIORITY_MEDIUM));
            $ticket->setUserEmail($request->request->get('user_email'));
            $ticket->setUserName($request->request->get('user_name'));

            // Handle attachment upload
            $attachment = $request->files->get('attachment');
            if ($attachment) {
                $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'application/pdf'];
                $maxSize = 5 * 1024 * 1024; // 5MB

                if (!in_array($attachment->getMimeType(), $allowedTypes)) {
                    $this->addFlash('error', 'Format de fichier invalide. Utilisez JPG, PNG, GIF ou PDF.');
                } elseif ($attachment->getSize() > $maxSize) {
                    $this->addFlash('error', 'Le fichier est trop volumineux. Maximum 5MB.');
                } else {
                    $ticket->setAttachmentFile($attachment);
                }
            }

            $errors = $this->validator->validate($ticket);
            
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
                $request->getSession()->set('user_email', $ticket->getUserEmail());
                
                $this->entityManager->persist($ticket);
                $this->entityManager->flush();

                $this->addFlash('success', '🎫 Ticket créé avec succès ! Nous vous répondrons dans les plus brefs délais.');
                return $this->redirectToRoute('aide_support_view', ['id' => $ticket->getId()]);
            }
        }

        return $this->render('front/aide/support_new.html.twig');
    }

    #[Route('/support/{id}', name: 'aide_support_view')]
    public function viewTicket(SupportTicket $ticket, Request $request, SupportFeedbackRepository $feedbackRepository): Response
    {
        if ($request->isMethod('POST') && $ticket->getStatus() !== 'closed') {
            $message = new ChatMessage();
            $message->setContent($request->request->get('message'));
            $message->setSenderName($ticket->getUserName());
            $message->setSenderType('user');
            $message->setTicket($ticket);

            $this->entityManager->persist($message);
            $ticket->setUpdatedAt(new \DateTime());
            $this->entityManager->flush();

            $this->addFlash('success', 'Message envoyé');
            return $this->redirectToRoute('aide_support_view', ['id' => $ticket->getId()]);
        }

        $feedback = $feedbackRepository->findOneBy(['ticket' => $ticket]);

        return $this->render('front/aide/support_view.html.twig', [
            'ticket' => $ticket,
            'feedback' => $feedback,
        ]);
    }

    #[Route('/support/{id}/feedback', name: 'aide_support_feedback', methods: ['POST'])]
    public function submitFeedback(SupportTicket $ticket, Request $request): Response
    {
        if ($ticket->getStatus() !== 'closed') {
            $this->addFlash('error', 'Vous ne pouvez évaluer que les tickets fermés.');
            return $this->redirectToRoute('aide_support_view', ['id' => $ticket->getId()]);
        }

        $feedback = new SupportFeedback();
        $feedback->setTicket($ticket);
        $feedback->setRating((int) $request->request->get('rating', 5));
        $feedback->setComment($request->request->get('comment'));
        $feedback->setFeedbackType($request->request->get('feedback_type', 'general'));
        $feedback->setWouldRecommend($request->request->getBoolean('would_recommend', true));

        $this->entityManager->persist($feedback);
        $this->entityManager->flush();

        $this->addFlash('success', 'Merci pour votre avis ! Votre feedback nous aide à améliorer notre service.');
        return $this->redirectToRoute('aide_support_view', ['id' => $ticket->getId()]);
    }

    #[Route('/urgence-info', name: 'aide_urgence_info')]
    public function urgence(): Response
    {
        return $this->render('front/aide/urgence.html.twig');
    }
}
