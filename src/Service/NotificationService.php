<?php

namespace App\Service;

use App\Entity\Don;
use App\Entity\Donneur;
use App\Entity\DemandeDon;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class NotificationService
{
    public function __construct(
        private readonly MailerInterface $mailer,
        private readonly string $senderEmail = 'noreply@wellnessconnect.com',
        private readonly string $senderName = 'Wellness Connect'
    ) {}

    public function sendDonStatusUpdate(Don $don, string $recipientEmail, string $recipientName): void
    {
        $email = (new TemplatedEmail())
            ->from(new Address($this->senderEmail, $this->senderName))
            ->to(new Address($recipientEmail, $recipientName))
            ->subject($this->getDonSubject($don))
            ->htmlTemplate('emails/don_status.html.twig')
            ->context([
                'don' => $don,
                'recipientName' => $recipientName,
            ]);

        $this->mailer->send($email);
    }

    public function sendDonationConfirmation(Don $don, string $recipientEmail, string $recipientName): void
    {
        $email = (new TemplatedEmail())
            ->from(new Address($this->senderEmail, $this->senderName))
            ->to(new Address($recipientEmail, $recipientName))
            ->subject('Confirmation de votre déclaration de don')
            ->htmlTemplate('emails/donation_confirmation.html.twig')
            ->context([
                'don' => $don,
                'recipientName' => $recipientName,
            ]);

        $this->mailer->send($email);
    }

    public function sendDonorMatchNotification(Donneur $donor, DemandeDon $demande, int $matchScore): void
    {
        $email = (new TemplatedEmail())
            ->from(new Address($this->senderEmail, $this->senderName))
            ->to(new Address('donor@example.com', $donor->getPrenom() . ' ' . $donor->getNom()))
            ->subject('Une demande de don correspond à votre profil !')
            ->htmlTemplate('emails/donor_match.html.twig')
            ->context([
                'donor' => $donor,
                'demande' => $demande,
                'matchScore' => $matchScore,
            ]);

        $this->mailer->send($email);
    }

    public function sendUrgentDonationRequest(DemandeDon $demande, array $matchingDonors): void
    {
        foreach ($matchingDonors as $match) {
            $donor = $match['donor'];
            $email = (new TemplatedEmail())
                ->from(new Address($this->senderEmail, $this->senderName))
                ->to(new Address('donor@example.com', $donor->getPrenom() . ' ' . $donor->getNom()))
                ->subject('🚨 Urgent : Votre don peut sauver une vie !')
                ->htmlTemplate('emails/urgent_request.html.twig')
                ->context([
                    'donor' => $donor,
                    'demande' => $demande,
                    'matchScore' => $match['score'],
                ]);

            $this->mailer->send($email);
        }
    }

    public function sendReminder(Donneur $donor, string $type): void
    {
        $subjects = [
            'donation_eligible' => 'Vous êtes éligible pour un nouveau don !',
            'profile_incomplete' => 'Complétez votre profil donneur',
        ];

        $email = (new TemplatedEmail())
            ->from(new Address($this->senderEmail, $this->senderName))
            ->to(new Address('donor@example.com', $donor->getPrenom() . ' ' . $donor->getNom()))
            ->subject($subjects[$type] ?? 'Rappel')
            ->htmlTemplate('emails/reminder.html.twig')
            ->context([
                'donor' => $donor,
                'type' => $type,
            ]);

        $this->mailer->send($email);
    }

    private function getDonSubject(Don $don): string
    {
        return match ($don->getStatut()) {
            'VALIDÉ' => '✅ Votre don a été validé !',
            'REFUSÉ' => 'Mise à jour concernant votre don',
            default => 'Mise à jour de votre demande de don',
        };
    }
}
