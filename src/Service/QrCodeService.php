<?php

namespace App\Service;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Writer\PngWriter;

class QrCodeService
{
    /**
     * ✅ Génère un QR code pour un rendez-vous
     * Compatible endroid/qr-code v6.0.9
     * Retourne base64 pour affichage HTML direct
     */
    public function generateRdvQrCode(
        int    $rdvId,
        string $patientNom,
        string $medecinNom,
        string $hopitalNom,
        string $dateRdv,
        string $typeConsultation
    ): string {
        $content = "=== RENDEZ-VOUS MEDICAL ===" . "\n"
            . "ID: #" . $rdvId . "\n"
            . "Patient: " . $patientNom . "\n"
            . "Medecin: " . $medecinNom . "\n"
            . "Hopital: " . $hopitalNom . "\n"
            . "Date: " . $dateRdv . "\n"
            . "Type: " . $typeConsultation . "\n"
            . "=========================" . "\n"
            . "SmartHealth AI";

        $result = Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->validateResult(false)
            ->data($content)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::High)
            ->size(280)
            ->margin(12)
            ->foregroundColor(new Color(30, 58, 138))
            ->backgroundColor(new Color(255, 255, 255))
            ->build();

        return base64_encode($result->getString());
    }

    /**
     * ✅ Génère un QR code simple
     */
    public function generateSimple(string $content, int $size = 200): string
    {
        $result = Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->validateResult(false)
            ->data($content)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::Medium)
            ->size($size)
            ->margin(10)
            ->build();

        return base64_encode($result->getString());
    }

    /**
     * ✅ Génère un QR code pour une localisation médicale
     */
    public function generateMedicalLocationQr(string $lieuNom, string $adresse): string
    {
        $content = "Lieu: {$lieuNom}\nAdresse: {$adresse}";
        return $this->generateSimple($content);
    }

    /**
     * ✅ Génère un QR code pour une carte de donneur
     */
    public function generateDonorCardQr(string $donneurNom, string $groupeSanguin): string
    {
        $content = "Donneur: {$donneurNom}\nGroupe: {$groupeSanguin}";
        return $this->generateSimple($content);
    }

    /**
     * ✅ Génère un QR code pour un certificat de don
     */
    public function generateDonationCertificateQr(string $certificatId, string $donneurNom = 'Donneur'): string
    {
        $content = "Certificat: {$certificatId}\nDonneur: {$donneurNom}";
        return $this->generateSimple($content);
    }
}