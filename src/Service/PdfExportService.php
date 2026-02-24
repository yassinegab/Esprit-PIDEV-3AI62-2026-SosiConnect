<?php

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * Service d'export PDF de l'analyse IA medicale
 * Bundle : dompdf/dompdf
 * Installation : composer require dompdf/dompdf
 */
class PdfExportService
{
    public function generateAnalysisPdf(array $analysis, array $dossierData, string $patientNom): string
    {
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', false);

        $dompdf = new Dompdf($options);
        $html = $this->buildHtml($analysis, $patientNom);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->output();
    }

    private function buildHtml(array $analysis, string $patientNom): string
    {
        $date       = date('d/m/Y H:i');
        $scoreSante = isset($analysis['score_sante']) ? (int) $analysis['score_sante'] : 0;
        $gravite    = isset($analysis['gravite']) ? $analysis['gravite'] : 'modere';
        $resumeCas  = htmlspecialchars(isset($analysis['resume_cas']) ? $analysis['resume_cas'] : '', ENT_QUOTES, 'UTF-8');
        $urgenceVal = isset($analysis['urgence']) && $analysis['urgence'];
        $urgenceTxt = $urgenceVal ? 'OUI - URGENT' : 'Non';
        $patientEsc = htmlspecialchars($patientNom, ENT_QUOTES, 'UTF-8');

        // Couleur gravite
        if ($gravite === 'faible') {
            $graviteColor = '#16a34a';
            $graviteLabel = 'Faible';
        } elseif ($gravite === 'eleve') {
            $graviteColor = '#dc2626';
            $graviteLabel = 'Elevee';
        } else {
            $graviteColor = '#ca8a04';
            $graviteLabel = 'Moderee';
        }

        // Couleur score
        if ($scoreSante >= 75) {
            $scoreColor = '#16a34a';
        } elseif ($scoreSante >= 50) {
            $scoreColor = '#ca8a04';
        } else {
            $scoreColor = '#dc2626';
        }

        // Specialites
        $specialites     = isset($analysis['specialites_recommandees']) ? $analysis['specialites_recommandees'] : array();
        $specialitesHtml = '';
        foreach ($specialites as $spec) {
            $s = htmlspecialchars($spec, ENT_QUOTES, 'UTF-8');
            $specialitesHtml .= '<span style="display:inline-block;background:#dbeafe;color:#1e40af;padding:3px 10px;border-radius:12px;font-size:11px;margin:2px;">' . $s . '</span>';
        }

        // Scores systemes
        $statistiques   = isset($analysis['statistiques']) ? $analysis['statistiques'] : array();
        $scoresSystemes = isset($statistiques['scores_systemes']) ? $statistiques['scores_systemes'] : array();
        $scoresHtml     = '';
        foreach ($scoresSystemes as $systeme => $score) {
            $scoreInt = (int) $score;
            if ($scoreInt >= 75) {
                $barColor = '#16a34a';
            } elseif ($scoreInt >= 50) {
                $barColor = '#ca8a04';
            } else {
                $barColor = '#dc2626';
            }
            $label = ucfirst(str_replace('_', ' ', $systeme));
            $scoresHtml .= '<tr>'
                . '<td style="padding:6px 10px;font-size:12px;color:#374151;">' . $label . '</td>'
                . '<td style="padding:6px 10px;">'
                . '<div style="background:#e5e7eb;border-radius:4px;height:14px;">'
                . '<div style="background:' . $barColor . ';height:14px;border-radius:4px;width:' . $scoreInt . '%;"></div>'
                . '</div></td>'
                . '<td style="padding:6px 10px;font-size:12px;font-weight:bold;color:' . $barColor . ';">' . $scoreInt . '/100</td>'
                . '</tr>';
        }

        // Facteurs de risque
        $facteurs     = isset($analysis['facteurs_risque']) ? $analysis['facteurs_risque'] : array();
        $facteursHtml = '';
        foreach ($facteurs as $f) {
            $facteursHtml .= '<li style="margin-bottom:4px;font-size:12px;color:#374151;">- ' . htmlspecialchars($f, ENT_QUOTES, 'UTF-8') . '</li>';
        }

        // Complications
        $complications     = isset($analysis['complications_potentielles']) ? $analysis['complications_potentielles'] : array();
        $complicationsHtml = '';
        foreach ($complications as $c) {
            $complicationsHtml .= '<li style="margin-bottom:4px;font-size:12px;color:#374151;">- ' . htmlspecialchars($c, ENT_QUOTES, 'UTF-8') . '</li>';
        }

        // Recommandations
        $recommandations     = isset($analysis['recommandations']) ? $analysis['recommandations'] : array();
        $recommandationsHtml = '';
        foreach ($recommandations as $r) {
            $recommandationsHtml .= '<li style="margin-bottom:5px;font-size:12px;color:#374151;">+ ' . htmlspecialchars($r, ENT_QUOTES, 'UTF-8') . '</li>';
        }

        // Examens
        $examens     = isset($analysis['examens_suggeres']) ? $analysis['examens_suggeres'] : array();
        $examensHtml = '';
        foreach ($examens as $e) {
            $examensHtml .= '<li style="margin-bottom:5px;font-size:12px;color:#374151;">-&gt; ' . htmlspecialchars($e, ENT_QUOTES, 'UTF-8') . '</li>';
        }

        // Plan de suivi
        $planSuivi = isset($analysis['plan_suivi']) ? $analysis['plan_suivi'] : array();
        $planHtml  = '';
        $planItems = array(
            'immediat'    => array('label' => 'Immediat',    'color' => '#dc2626', 'bg' => '#fef2f2'),
            'court_terme' => array('label' => 'Court terme', 'color' => '#ea580c', 'bg' => '#fff7ed'),
            'moyen_terme' => array('label' => 'Moyen terme', 'color' => '#2563eb', 'bg' => '#eff6ff'),
            'long_terme'  => array('label' => 'Long terme',  'color' => '#16a34a', 'bg' => '#f0fdf4'),
        );
        foreach ($planItems as $key => $cfg) {
            if (!empty($planSuivi[$key])) {
                $txt = htmlspecialchars($planSuivi[$key], ENT_QUOTES, 'UTF-8');
                $planHtml .= '<div style="border-left:4px solid ' . $cfg['color'] . ';background:' . $cfg['bg'] . ';padding:8px 12px;margin-bottom:8px;border-radius:0 6px 6px 0;">'
                    . '<p style="font-size:11px;font-weight:bold;color:' . $cfg['color'] . ';margin:0 0 4px 0;">' . $cfg['label'] . '</p>'
                    . '<p style="font-size:11px;color:#374151;margin:0;">' . $txt . '</p>'
                    . '</div>';
            }
        }

        // Medecins locaux
        $medecinsLocaux     = isset($analysis['medecins_locaux']) ? $analysis['medecins_locaux'] : array();
        $medecinsLocauxHtml = '';
        foreach ($medecinsLocaux as $m) {
            $nom   = htmlspecialchars(isset($m['nom'])       ? $m['nom']       : '', ENT_QUOTES, 'UTF-8');
            $prenom= htmlspecialchars(isset($m['prenom'])    ? $m['prenom']    : '', ENT_QUOTES, 'UTF-8');
            $spec  = htmlspecialchars(isset($m['specialite'])? $m['specialite']: '', ENT_QUOTES, 'UTF-8');
            $email = htmlspecialchars(isset($m['email'])     ? $m['email']     : '', ENT_QUOTES, 'UTF-8');
            $tel   = htmlspecialchars(isset($m['telephone']) ? $m['telephone'] : '', ENT_QUOTES, 'UTF-8');
            $medecinsLocauxHtml .= '<div style="border:1px solid #bbf7d0;background:#f0fdf4;border-radius:6px;padding:8px 12px;margin-bottom:6px;">'
                . '<p style="font-size:12px;font-weight:bold;color:#166534;margin:0;">Dr. ' . $prenom . ' ' . $nom . '</p>'
                . '<p style="font-size:11px;color:#16a34a;margin:2px 0;">' . $spec . '</p>'
                . '<p style="font-size:11px;color:#6b7280;margin:0;">' . $email . ' | ' . $tel . '</p>'
                . '</div>';
        }

        // Medecins internationaux
        $medecinsIntl     = isset($analysis['medecins_internationaux']) ? $analysis['medecins_internationaux'] : array();
        $medecinsIntlHtml = '';
        $countIntl        = 0;
        foreach ($medecinsIntl as $m) {
            if ($countIntl >= 4) {
                break;
            }
            $nom     = htmlspecialchars(isset($m['nom'])         ? $m['nom']         : '', ENT_QUOTES, 'UTF-8');
            $spec    = htmlspecialchars(isset($m['specialite'])  ? $m['specialite']  : '', ENT_QUOTES, 'UTF-8');
            $instit  = htmlspecialchars(isset($m['institution']) ? $m['institution'] : '', ENT_QUOTES, 'UTF-8');
            $pays    = htmlspecialchars(isset($m['pays'])        ? $m['pays']        : '', ENT_QUOTES, 'UTF-8');
            $email   = htmlspecialchars(isset($m['email'])       ? $m['email']       : '', ENT_QUOTES, 'UTF-8');
            $medecinsIntlHtml .= '<div style="border:1px solid #bfdbfe;background:#eff6ff;border-radius:6px;padding:8px 12px;margin-bottom:6px;">'
                . '<p style="font-size:12px;font-weight:bold;color:#1e3a8a;margin:0;">' . $nom . '</p>'
                . '<p style="font-size:11px;color:#2563eb;margin:2px 0;">' . $spec . ' - ' . $instit . '</p>'
                . '<p style="font-size:11px;color:#6b7280;margin:0;">' . $pays . ' | ' . $email . '</p>'
                . '</div>';
            $countIntl++;
        }

        // Sections optionnelles
        $sectionLocaux = '';
        if (!empty($medecinsLocauxHtml)) {
            $sectionLocaux = '<div class="section"><p class="section-title" style="color:#16a34a;">Medecins Disponibles Localement</p>' . $medecinsLocauxHtml . '</div>';
        }
        $sectionIntl = '';
        if (!empty($medecinsIntlHtml)) {
            $sectionIntl = '<div class="section"><p class="section-title" style="color:#2563eb;">Experts Internationaux Recommandes</p>' . $medecinsIntlHtml . '</div>';
        }

        // Construction HTML final
        $html  = '<!DOCTYPE html><html lang="fr"><head><meta charset="UTF-8">';
        $html .= '<title>Rapport IA - ' . $patientEsc . '</title>';
        $html .= '<style>';
        $html .= '* { box-sizing:border-box; margin:0; padding:0; }';
        $html .= 'body { font-family:DejaVu Sans,Arial,sans-serif; font-size:12px; color:#1f2937; }';
        $html .= '.header { background:#2563eb; color:white; padding:24px 30px; }';
        $html .= '.header h1 { font-size:20px; font-weight:bold; margin-bottom:4px; }';
        $html .= '.header p { font-size:11px; opacity:0.85; }';
        $html .= '.section { padding:16px 30px; border-bottom:1px solid #f3f4f6; }';
        $html .= '.section-title { font-size:14px; font-weight:bold; color:#1f2937; margin-bottom:10px; padding-bottom:6px; border-bottom:2px solid #e5e7eb; }';
        $html .= '.grid-2 { display:table; width:100%; }';
        $html .= '.col { display:table-cell; width:50%; vertical-align:top; padding-right:12px; }';
        $html .= '.footer { background:#f9fafb; padding:14px 30px; text-align:center; font-size:10px; color:#9ca3af; border-top:1px solid #e5e7eb; }';
        $html .= 'table { width:100%; border-collapse:collapse; }';
        $html .= 'ul { list-style:none; padding:0; margin:0; }';
        $html .= '</style></head><body>';

        $html .= '<div class="header">';
        $html .= '<h1>Rapport Analyse IA - Dossier Medical</h1>';
        $html .= '<p>Patient : ' . $patientEsc . ' | Genere le : ' . $date . '</p>';
        $html .= '<p style="margin-top:6px;font-size:10px;opacity:0.7;">SmartHealth AI - Rapport confidentiel</p>';
        $html .= '</div>';

        $html .= '<div class="section" style="background:#f8fafc;">';
        $html .= '<div class="grid-2">';
        $html .= '<div class="col">';
        $html .= '<p style="font-size:11px;color:#6b7280;margin-bottom:4px;">Score de Sante Global</p>';
        $html .= '<p style="font-size:42px;font-weight:bold;color:' . $scoreColor . ';">' . $scoreSante . '<span style="font-size:18px;color:#9ca3af;">/100</span></p>';
        $html .= '</div>';
        $html .= '<div class="col" style="text-align:right;padding-top:8px;">';
        $html .= '<span style="background:' . $graviteColor . ';color:white;padding:6px 16px;border-radius:20px;font-size:13px;font-weight:bold;">Gravite ' . $graviteLabel . '</span>';
        $html .= '<p style="margin-top:8px;font-size:11px;color:#6b7280;">Urgence : <strong>' . $urgenceTxt . '</strong></p>';
        $html .= '<div style="margin-top:8px;">' . $specialitesHtml . '</div>';
        $html .= '</div></div></div>';

        $html .= '<div class="section">';
        $html .= '<p class="section-title">Resume Clinique</p>';
        $html .= '<p style="font-size:12px;line-height:1.7;color:#374151;">' . $resumeCas . '</p>';
        $html .= '</div>';

        if (!empty($scoresHtml)) {
            $html .= '<div class="section">';
            $html .= '<p class="section-title">Scores par Systeme Organique</p>';
            $html .= '<table><tbody>' . $scoresHtml . '</tbody></table>';
            $html .= '</div>';
        }

        if (!empty($facteursHtml) || !empty($complicationsHtml)) {
            $html .= '<div class="section"><div class="grid-2">';
            $html .= '<div class="col"><p class="section-title" style="color:#dc2626;">Facteurs de Risque</p><ul>' . $facteursHtml . '</ul></div>';
            $html .= '<div class="col"><p class="section-title" style="color:#ea580c;">Complications Potentielles</p><ul>' . $complicationsHtml . '</ul></div>';
            $html .= '</div></div>';
        }

        if (!empty($planHtml)) {
            $html .= '<div class="section"><p class="section-title">Plan de Suivi Medical</p>' . $planHtml . '</div>';
        }

        if (!empty($recommandationsHtml) || !empty($examensHtml)) {
            $html .= '<div class="section"><div class="grid-2">';
            $html .= '<div class="col"><p class="section-title" style="color:#ca8a04;">Recommandations</p><ul>' . $recommandationsHtml . '</ul></div>';
            $html .= '<div class="col"><p class="section-title" style="color:#7c3aed;">Examens Complementaires</p><ul>' . $examensHtml . '</ul></div>';
            $html .= '</div></div>';
        }

        $html .= $sectionLocaux;
        $html .= $sectionIntl;

        $html .= '<div class="section" style="background:#fffbeb;">';
        $html .= '<p style="font-size:10px;color:#92400e;">AVERTISSEMENT : Ce rapport est genere par intelligence artificielle a titre informatif uniquement. Il ne remplace pas l\'avis d\'un professionnel de sante qualifie.</p>';
        $html .= '</div>';

        $html .= '<div class="footer">SmartHealth AI | Rapport confidentiel | Genere le ' . $date . '</div>';
        $html .= '</body></html>';

        return $html;
    }
}