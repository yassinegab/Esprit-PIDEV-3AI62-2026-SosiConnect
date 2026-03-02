<?php

namespace App\Service;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\SvgWriter;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class QrCodeService
{
    public function __construct(
        private readonly UrlGeneratorInterface $urlRouter
    ) {}

    public function generate(string $data, int $size = 300): string
    {
        $qrCode = new QrCode(
            data: $data,
            encoding: new Encoding('UTF-8'),
            errorCorrectionLevel: ErrorCorrectionLevel::High,
            size: $size,
            margin: 10,
            roundBlockSizeMode: RoundBlockSizeMode::Margin,
            foregroundColor: new Color(0, 0, 0),
            backgroundColor: new Color(255, 255, 255)
        );

        $writer = new SvgWriter();
        $result = $writer->write($qrCode);

        return $result->getDataUri();
    }

    public function generateDonationCertificateQr(int $donationId): string
    {
        $url = $this->urlRouter->generate(
            'don_certificate_verify',
            ['id' => $donationId],
            UrlGeneratorInterface::ABSOLUTE_URL
        );
        return $this->generate($url, 150);
    }

    public function generateDonorCardQr(int $donorId): string
    {
        $url = $this->urlRouter->generate(
            'donneur_public',
            ['id' => $donorId],
            UrlGeneratorInterface::ABSOLUTE_URL
        );
        return $this->generate($url, 200);
    }

    public function generateMedicalLocationQr(float $lat, float $lng, string $name): string
    {
        $url = sprintf('https://www.google.com/maps/dir/?api=1&destination=%f,%f', $lat, $lng);
        return $this->generate($url, 180);
    }

    public function generateAppointmentQr(int $appointmentId): string
    {
        $url = $this->urlRouter->generate(
            'app_rendez_vous_show',
            ['id' => $appointmentId],
            UrlGeneratorInterface::ABSOLUTE_URL
        );
        return $this->generate($url, 150);
    }
}
