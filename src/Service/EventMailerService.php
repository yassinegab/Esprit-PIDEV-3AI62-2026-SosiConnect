<?php

namespace App\Service;

use App\Entity\Event;
use App\Entity\User;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class EventMailerService
{
    private MailerInterface $mailer;
    private string $fromAddress;

    public function __construct(MailerInterface $mailer, string $fromAddress)
    {
        $this->mailer = $mailer;
        $this->fromAddress = $fromAddress;
    }

    public function sendAttendanceConfirmation(Event $event, string $recipientEmail, ?User $user = null): void
    {
        if ($user) {
            $body = sprintf(
                "Bonjour,\n\n%s (%s) s'est inscrit à l'événement '%s' prévu le %s.\n\nMerci !\n",
                $user->getUsername(),
                $user->getEmail(),
                $event->getTitle(),
                $event->getDate()->format('d/m/Y H:i')
            );
        } else {
            $body = sprintf(
                "Bonjour,\n\nVous êtes inscrit à l'événement '%s' prévu le %s.\n\nMerci !\n",
                $event->getTitle(),
                $event->getDate()->format('d/m/Y H:i')
            );
        }

        $email = (new Email())
            ->from($this->fromAddress)
            ->to($recipientEmail)
            ->subject('Confirmation de présence à l\'événement')
            ->text($body);

        try {
            $this->mailer->send($email);

            // ✅ Debug : on affiche la classe du transport utilisé
            dump($this->mailer);

            // ✅ Debug : on teste si l’email est bien un objet Email
            dump($email);

            // Optionnel : affiche message succès
            dump('Email envoyé via Symfony Mailer');

        } catch (TransportExceptionInterface $e) {
            // Affiche l’erreur complète
            dump('Erreur Transport : ' . $e->getMessage());
            throw $e; // pour que tu voies l’erreur si tu utilises try/catch ailleurs
        } catch (\Exception $e) {
            // Autres erreurs possibles
            dump('Erreur générale : ' . $e->getMessage());
            throw $e;
        }
    }
}