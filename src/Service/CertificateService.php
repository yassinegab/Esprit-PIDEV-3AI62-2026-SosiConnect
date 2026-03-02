<?php

namespace App\Service;

use App\Entity\Don;
use App\Entity\Donneur;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;

class CertificateService
{
    public function __construct(
        private readonly Environment $twig,
        private readonly QrCodeService $qrCodeService
    ) {}

    public function generateDonationCertificate(Don $don, Donneur $donneur): string
    {
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        $options->set('defaultFont', 'DejaVu Sans');

        $dompdf = new Dompdf($options);

        $qrCodeDataUri = $this->qrCodeService->generateDonationCertificateQr($don->getId());

        $html = $this->twig->render('certificates/donation_certificate.html.twig', [
            'don' => $don,
            'donneur' => $donneur,
            'date' => new \DateTime(),
            'certificateNumber' => $this->generateCertificateNumber($don),
            'qrCode' => $qrCodeDataUri,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->output();
    }

    public function generateCertificateNumber(Don $don): string
    {
        return sprintf(
            'CERT-%s-%s-%04d',
            $don->getDateDon()->format('Y'),
            strtoupper(substr($don->getTypeDon(), 0, 3)),
            $don->getId()
        );
    }

    public function getCertificateFileName(Don $don): string
    {
        return sprintf('certificat-don-%d.pdf', $don->getId());
    }
}
