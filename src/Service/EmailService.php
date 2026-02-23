<?php
// ============================================================
// FICHIER : src/Service/EmailService.php
// BUNDLE  : symfony/mailer
// INSTALL : composer require symfony/mailer
// ============================================================

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class EmailService
{
    public function __construct(private MailerInterface $mailer) {}

    /**
     * ✅ Envoie un email de confirmation de RDV au patient
     */
    public function sendRdvConfirmation(
        string $toEmail,
        string $patientNom,
        string $medecinNom,
        string $hopitalNom,
        \DateTime $dateRdv,
        string $typeConsultation
    ): void {
        $dateFormatee = $dateRdv->format('d/m/Y à H:i');

        $html = <<<HTML
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body style="font-family:Arial,sans-serif;background:#f9fafb;padding:20px;">
    <div style="max-width:600px;margin:0 auto;background:white;border-radius:12px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.1);">
        
        <!-- Header -->
        <div style="background:linear-gradient(135deg,#2563eb,#7c3aed);padding:30px;text-align:center;">
            <h1 style="color:white;margin:0;font-size:22px;">✅ Rendez-vous Confirmé</h1>
            <p style="color:rgba(255,255,255,0.85);margin-top:8px;font-size:14px;">SmartHealth AI</p>
        </div>

        <!-- Corps -->
        <div style="padding:30px;">
            <p style="font-size:16px;color:#374151;">Bonjour <strong>{$patientNom}</strong>,</p>
            <p style="color:#6b7280;line-height:1.6;">Votre rendez-vous médical a été confirmé avec succès. Voici les détails :</p>

            <!-- Détails RDV -->
            <div style="background:#eff6ff;border:1px solid #bfdbfe;border-radius:8px;padding:20px;margin:20px 0;">
                <table style="width:100%;border-collapse:collapse;">
                    <tr>
                        <td style="padding:8px 0;color:#6b7280;font-size:13px;width:130px;">
                            📅 <strong>Date</strong>
                        </td>
                        <td style="padding:8px 0;color:#1e3a8a;font-size:14px;font-weight:bold;">{$dateFormatee}</td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0;color:#6b7280;font-size:13px;">
                            👨‍⚕️ <strong>Médecin</strong>
                        </td>
                        <td style="padding:8px 0;color:#1f2937;font-size:14px;">{$medecinNom}</td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0;color:#6b7280;font-size:13px;">
                            🏥 <strong>Établissement</strong>
                        </td>
                        <td style="padding:8px 0;color:#1f2937;font-size:14px;">{$hopitalNom}</td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0;color:#6b7280;font-size:13px;">
                            💊 <strong>Type</strong>
                        </td>
                        <td style="padding:8px 0;color:#1f2937;font-size:14px;">{$typeConsultation}</td>
                    </tr>
                </table>
            </div>

            <div style="background:#fef9c3;border-left:4px solid #ca8a04;padding:12px 16px;border-radius:4px;font-size:13px;color:#854d0e;">
                <strong>⚠️ Rappel :</strong> Merci d'arriver 10 minutes avant votre rendez-vous et d'apporter votre dossier médical.
            </div>
        </div>

        <!-- Footer -->
        <div style="background:#f9fafb;padding:16px;text-align:center;border-top:1px solid #e5e7eb;">
            <p style="font-size:12px;color:#9ca3af;margin:0;">
                SmartHealth AI — Ne pas répondre à cet email.<br>
                © 2026 SmartHealth AI. Tous droits réservés.
            </p>
        </div>
    </div>
</body>
</html>
HTML;

        $email = (new Email())
            ->from('noreply@smarthealth.ai')
            ->to($toEmail)
            ->subject("✅ Confirmation RDV — {$dateFormatee}")
            ->html($html);

        $this->mailer->send($email);
    }

    /**
     * ✅ Email d'annulation de RDV
     */
    public function sendRdvAnnulation(
        string $toEmail,
        string $patientNom,
        \DateTime $dateRdv
    ): void {
        $dateFormatee = $dateRdv->format('d/m/Y à H:i');

        $html = <<<HTML
<!DOCTYPE html>
<html><head><meta charset="UTF-8"></head>
<body style="font-family:Arial,sans-serif;background:#f9fafb;padding:20px;">
    <div style="max-width:600px;margin:0 auto;background:white;border-radius:12px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.1);">
        <div style="background:linear-gradient(135deg,#dc2626,#ea580c);padding:30px;text-align:center;">
            <h1 style="color:white;margin:0;font-size:22px;">❌ Rendez-vous Annulé</h1>
        </div>
        <div style="padding:30px;">
            <p style="font-size:16px;color:#374151;">Bonjour <strong>{$patientNom}</strong>,</p>
            <p style="color:#6b7280;">Votre rendez-vous prévu le <strong>{$dateFormatee}</strong> a été annulé.</p>
            <p style="color:#6b7280;">Pour reprendre un rendez-vous, connectez-vous à votre espace patient SmartHealth AI.</p>
        </div>
        <div style="background:#f9fafb;padding:16px;text-align:center;border-top:1px solid #e5e7eb;">
            <p style="font-size:12px;color:#9ca3af;margin:0;">SmartHealth AI — © 2026</p>
        </div>
    </div>
</body>
</html>
HTML;

        $email = (new Email())
            ->from('noreply@smarthealth.ai')
            ->to($toEmail)
            ->subject("❌ Annulation RDV — {$dateFormatee}")
            ->html($html);

        $this->mailer->send($email);
    }
}


// ============================================================
// MODIFICATIONS dans RendezVousController.php
// Ajouter EmailService en dépendance + appel dans new() et delete()
// ============================================================

/*
DANS RendezVousController::new() — ajouter après $entityManager->flush() :

    use App\Service\EmailService;

    // Envoyer email de confirmation
    try {
        if ($rendezVous->getPatient() && $rendezVous->getPatient()->getEmail()) {
            $emailService->sendRdvConfirmation(
                $rendezVous->getPatient()->getEmail(),
                $rendezVous->getPatient()->getPrenom() . ' ' . $rendezVous->getPatient()->getNom(),
                $rendezVous->getMedecin() ? 'Dr. ' . $rendezVous->getMedecin()->getNom() : 'Non assigné',
                $rendezVous->getHopital() ? $rendezVous->getHopital()->getNom() : 'Non assigné',
                $rendezVous->getDateRendezVous(),
                $rendezVous->getTypeConsultation() ?? 'Consultation'
            );
        }
    } catch (\Exception $e) {
        // L'email échoue silencieusement — le RDV est quand même créé
    }


DANS RendezVousController::new() — ajouter EmailService dans la signature :
    public function new(Request $request, EntityManagerInterface $entityManager, EmailService $emailService): Response


DANS .env — configurer le mailer :
    MAILER_DSN=smtp://localhost:1025

    Ou pour test (Mailtrap) :
    MAILER_DSN=smtp://user:pass@sandbox.smtp.mailtrap.io:2525
*/
