<?php

namespace App\Service;

use App\Entity\ReponseDon;
use App\Entity\DemandeDon;
use App\Entity\Urgence;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class EmailService
{
    private const SENDER_EMAIL = 'dhiamejdi@gmail.com';
    private const SENDER_NAME = 'Wellness Connect';

    public function __construct(
        private readonly MailerInterface $mailer
    ) {}

    public function sendTestEmail(string $to): bool
    {
        try {
            $email = (new TemplatedEmail())
                ->from(new Address(self::SENDER_EMAIL, self::SENDER_NAME))
                ->to($to)
                ->subject('Test Email - Wellness Connect')
                ->text('This is a test email from Wellness Connect. Sent on ' . date('d/m/Y H:i'));

            $this->mailer->send($email);
            return true;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function sendResponseNotification(ReponseDon $reponse): void
    {
        $demande = $reponse->getDemande();
        
        if (!$demande->getPatientEmail()) {
            return;
        }

        $email = (new TemplatedEmail())
            ->from(new Address(self::SENDER_EMAIL, self::SENDER_NAME))
            ->to(new Address($demande->getPatientEmail(), $demande->getPatientNom() ?? 'Demandeur'))
            ->subject('Quelqu\'un a repondu a votre demande de don !')
            ->htmlTemplate('emails/response_notification.html.twig')
            ->context([
                'reponse' => $reponse,
                'demande' => $demande,
            ]);

        $this->mailer->send($email);
    }

    public function sendResponseAccepted(ReponseDon $reponse): void
    {
        $email = (new TemplatedEmail())
            ->from(new Address(self::SENDER_EMAIL, self::SENDER_NAME))
            ->to(new Address($reponse->getDonneurEmail(), $reponse->getDonneurNom()))
            ->subject('Votre proposition d\'aide a ete acceptee !')
            ->htmlTemplate('emails/response_accepted.html.twig')
            ->context([
                'reponse' => $reponse,
                'demande' => $reponse->getDemande(),
            ]);

        $this->mailer->send($email);
    }

    public function sendWelcomeEmail(string $toEmail, string $name): void
    {
        $email = (new TemplatedEmail())
            ->from(new Address(self::SENDER_EMAIL, self::SENDER_NAME))
            ->to(new Address($toEmail, $name))
            ->subject('Bienvenue sur Wellness Connect !')
            ->htmlTemplate('emails/welcome.html.twig')
            ->context([
                'name' => $name,
            ]);

        $this->mailer->send($email);
    }

public function sendUrgencyNotification(string $toEmail, string $contactName, Urgence $urgence): void
    {
        $mapsUrl = sprintf('https://maps.google.com/?q=%s,%s', $urgence->getLatitude(), $urgence->getLongitude());
        
        $email = (new TemplatedEmail())
            ->from(new Address(self::SENDER_EMAIL, self::SENDER_NAME))
            ->to(new Address($toEmail, $contactName))
            ->subject('ALERTE URGENCE - Wellness Connect')
            ->text(sprintf(
                "BONJOUR %s,\n\nUNE URGENCE A ETE DECLENCHEE !\n\nLocalisation: %s\nDate: %s\n\nMerci de reagir rapidement !\n\n- Wellness Connect",
                $contactName,
                $mapsUrl,
                $urgence->getDateUrgence()->format('d/m/Y H:i')
            ));

        $this->mailer->send($email);
    }
}
