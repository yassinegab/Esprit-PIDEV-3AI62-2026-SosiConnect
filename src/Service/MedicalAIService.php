<?php

namespace App\Service;

use App\Repository\UserRepository;
use App\Repository\HopitalRepository;
use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;

class MedicalAIService
{
    private const GROQ_API_URL = 'https://api.groq.com/openai/v1/chat/completions';
    
    private Client $httpClient;
    private LoggerInterface $logger;
    private string $apiKey;
    private UserRepository $userRepository;
    private HopitalRepository $hopitalRepository;

    public function __construct(
        LoggerInterface $logger,
        UserRepository $userRepository,
        HopitalRepository $hopitalRepository
    ) {
        $this->httpClient = new Client();
        $this->logger = $logger;
        $this->apiKey = $_ENV['GROQ_API_KEY'] ?? '';
        $this->userRepository = $userRepository;
        $this->hopitalRepository = $hopitalRepository;
    }

    /**
     * ✅ Analyse complète 100% DYNAMIQUE
     */
    public function analyzeMedicalRecord(array $dossierData): array
    {
        if (empty($this->apiKey)) {
            return $this->getFallbackRecommendations($dossierData);
        }

        try {
            // 1. Analyse IA approfondie avec données RÉELLES
            $aiAnalysis = $this->callGroqAPI($dossierData);
            
            // 2. ✅ Médecins locaux PERTINENTS UNIQUEMENT
            $specialitesRecommandees = $aiAnalysis['specialites_recommandees'] ?? [];
            $medecinsLocaux = $this->findRelevantLocalDoctors($specialitesRecommandees);
            
            // 3. ✅ Hôpitaux locaux PERTINENTS UNIQUEMENT
            $hopitauxLocaux = $this->findRelevantLocalHospitals(
                $aiAnalysis['urgence'] ?? false,
                $specialitesRecommandees
            );
            
            // 4. ✅ Médecins et hôpitaux internationaux (générés par l'IA)
            $medecinsInternationaux = $aiAnalysis['medecins_experts'] ?? [];
            $hopitauxInternationaux = $aiAnalysis['hopitaux_experts'] ?? [];
            
            // 5. ✅ Statistiques RÉELLES dynamiques
            $statistics = $this->generateDynamicStatistics($dossierData, $aiAnalysis);
            
            return array_merge($aiAnalysis, [
                'medecins_locaux' => $medecinsLocaux,
                'medecins_internationaux' => $medecinsInternationaux,
                'hopitaux_locaux' => $hopitauxLocaux,
                'hopitaux_internationaux' => $hopitauxInternationaux,
                'statistiques' => $statistics,
            ]);
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur analyse IA: ' . $e->getMessage());
            return $this->getFallbackRecommendations($dossierData);
        }
    }

    /**
     * ✅ Appel API Groq avec prompt INTELLIGENT
     */
    private function callGroqAPI(array $dossier): array
    {
        $prompt = $this->buildIntelligentPrompt($dossier);
        
        $response = $this->httpClient->post(self::GROQ_API_URL, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'llama-3.3-70b-versatile',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'Tu es un médecin expert international. Tu analyses les dossiers médicaux avec PRÉCISION et calcules des scores RÉELS basés sur les données du patient. Tu recommandes UNIQUEMENT les meilleurs spécialistes mondiaux PERTINENTS pour le cas. Réponds UNIQUEMENT en JSON français valide, sans texte supplémentaire.'
                    ],
                    [
                        'role' => 'user',
                        'content' => $prompt
                    ]
                ],
                'temperature' => 0.15, // ✅ Plus bas = plus cohérent
                'max_tokens' => 5000,
            ],
            'timeout' => 45,
        ]);

        $data = json_decode($response->getBody()->getContents(), true);
        
        if (!isset($data['choices'][0]['message']['content'])) {
            throw new \Exception('Réponse API invalide');
        }
        
        $aiResponse = $data['choices'][0]['message']['content'];
        
        return $this->parseAIResponse($aiResponse);
    }

    /**
     * ✅ Prompt OPTIMISÉ pour analyse PRÉCISE
     */
    private function buildIntelligentPrompt(array $dossier): string
    {
        $antecedents = $dossier['antecedents_medicaux'] ?? 'Aucun';
        $maladies = $dossier['maladies_chroniques'] ?? 'Aucune';
        $allergies = $dossier['allergies'] ?? 'Aucune';
        $traitements = $dossier['traitements_en_cours'] ?? 'Aucun';
        $diagnostics = $dossier['diagnostics'] ?? 'Aucun';
        $objectif = $dossier['objectif_sante'] ?? 'Non défini';
        $activite = $dossier['niveau_activite'] ?? 'Non défini';
        
        return <<<PROMPT
**ANALYSE MÉDICALE APPROFONDIE - CALCULS PRÉCIS OBLIGATOIRES**

**DONNÉES RÉELLES DU PATIENT :**
- Antécédents médicaux : {$antecedents}
- Maladies chroniques : {$maladies}
- Allergies : {$allergies}
- Traitements actuels : {$traitements}
- Diagnostics : {$diagnostics}
- Objectif santé : {$objectif}
- Niveau d'activité : {$activite}

**INSTRUCTIONS CRITIQUES :**
1. Analyse CES données spécifiques pour calculer des scores PRÉCIS
2. Les scores doivent refléter la GRAVITÉ RÉELLE des pathologies
3. Identifie UNIQUEMENT les spécialités NÉCESSAIRES pour ce cas
4. Recommande 6-8 VRAIS experts mondiaux RECONNUS dans ces domaines
5. Recommande 4-6 VRAIS hôpitaux d'EXCELLENCE MONDIALE spécialisés

**RÈGLES DE CALCUL DES SCORES :**
- Score général (score_sante) : 100 = parfait, 0 = critique
- Si diabète → score_metabolique entre 40-70
- Si hypertension → score_cardiovasculaire entre 50-75
- Si BPCO/asthme → score_respiratoire entre 40-80
- Si insuffisance rénale → score_renal entre 30-70
- Si problèmes hépatiques → score_hepatique entre 40-75
- Si problèmes neurologiques → score_neurologique entre 50-85

**FORMAT JSON EXACT (ADAPTE TOUS LES CHIFFRES AUX DONNÉES RÉELLES) :**

{
    "gravite": "faible|modere|eleve",
    "score_sante": <CALCUL SELON DONNÉES>,
    "urgence": <true si grave, false sinon>,
    "resume_cas": "<Analyse détaillée et professionnelle basée sur les VRAIES données>",
    "specialites_recommandees": ["Spécialité 1 exacte", "Spécialité 2 exacte"],
    "recommandations": [
        "<Recommandation précise 1>",
        "<Recommandation précise 2>",
        "<Recommandation précise 3>",
        "<Recommandation précise 4>"
    ],
    "examens_suggeres": [
        "<Examen spécifique 1>",
        "<Examen spécifique 2>",
        "<Examen spécifique 3>",
        "<Examen spécifique 4>"
    ],
    "facteurs_risque": [
        "<Facteur réel 1>",
        "<Facteur réel 2>",
        "<Facteur réel 3>"
    ],
    "plan_suivi": {
        "immediat": "<Action immédiate>",
        "court_terme": "<Plan court terme>",
        "moyen_terme": "<Plan moyen terme>",
        "long_terme": "<Plan long terme>"
    },
    "score_details": {
        "cardiovasculaire": <SCORE CALCULÉ>,
        "metabolique": <SCORE CALCULÉ>,
        "respiratoire": <SCORE CALCULÉ>,
        "renal": <SCORE CALCULÉ>,
        "hepatique": <SCORE CALCULÉ>,
        "neurologique": <SCORE CALCULÉ>
    },
    "complications_potentielles": [
        "<Complication réelle 1>",
        "<Complication réelle 2>",
        "<Complication réelle 3>"
    ],
    "medecins_experts": [
        {
            "nom": "Dr. <Prénom Nom RÉEL>",
            "specialite": "<Spécialité exacte>",
            "institution": "<Institution renommée RÉELLE>",
            "expertise": "<Expertise spécifique>",
            "pays": "<Pays>",
            "renommee": "<Description renommée>",
            "email": "<email@institution.edu>",
            "telephone": "<+XX XXX XXX XXX>"
        }
        // ... 5-7 autres experts RÉELS
    ],
    "hopitaux_experts": [
        {
            "nom": "<Hôpital RÉEL de renommée mondiale>",
            "ville": "<Ville>",
            "pays": "<Pays>",
            "specialites": ["<Spé 1>", "<Spé 2>"],
            "reputation": "<Classement mondial>",
            "urgences": <true/false>,
            "telephone": "<+XX XXX XXX XXX>",
            "site_web": "<www.hospital.org>"
        }
        // ... 3-5 autres hôpitaux RÉELS
    ],
    "indicateurs_performance": {
        "adherence_traitement": <SCORE CALCULÉ>,
        "controle_pathologie": <SCORE CALCULÉ>,
        "qualite_vie": <SCORE CALCULÉ>,
        "risque_complications": <SCORE CALCULÉ>
    }
}

IMPORTANT :
- TOUS les scores doivent être CALCULÉS selon les données réelles
- Les médecins doivent être des VRAIS experts mondiaux reconnus
- Les hôpitaux doivent être des VRAIES institutions d'excellence
- Réponds UNIQUEMENT avec le JSON (pas de texte avant/après)
PROMPT;
    }

    /**
     * ✅ Parse la réponse IA
     */
    private function parseAIResponse(string $response): array
    {
        // Nettoyer la réponse
        $response = preg_replace('/```json|```/', '', $response);
        $response = trim($response);
        
        // Extraire le JSON
        if (preg_match('/\{[\s\S]*\}/', $response, $matches)) {
            $response = $matches[0];
        }
        
        $data = json_decode($response, true);
        
        if (!$data || !is_array($data)) {
            throw new \Exception('JSON invalide');
        }
        
        return $data;
    }

    /**
     * ✅ Trouve UNIQUEMENT les médecins locaux PERTINENTS
     */
    private function findRelevantLocalDoctors(array $specialitesRecommandees): array
    {
        if (empty($specialitesRecommandees)) {
            return [];
        }
        
        $tousMedecins = $this->userRepository->findMedecins();
        $medecinsRelevants = [];
        
        foreach ($tousMedecins as $medecin) {
            $specialiteMedecin = $medecin->getSpecialite();
            
            if (empty($specialiteMedecin)) {
                continue;
            }
            
            // Vérifier si la spécialité matche
            foreach ($specialitesRecommandees as $specRecommandee) {
                if ($this->isRelevantSpecialty($specialiteMedecin, $specRecommandee)) {
                    $medecinsRelevants[] = [
                        'id' => $medecin->getId(),
                        'nom' => $medecin->getNom(),
                        'prenom' => $medecin->getPrenom(),
                        'email' => $medecin->getEmail(),
                        'telephone' => $medecin->getTelephone(),
                        'specialite' => $specialiteMedecin,
                        'pertinent' => true,
                        'local' => true,
                    ];
                    break;
                }
            }
        }
        
        return $medecinsRelevants;
    }

    /**
     * ✅ Trouve UNIQUEMENT les hôpitaux locaux PERTINENTS
     */
    private function findRelevantLocalHospitals(bool $urgence, array $specialitesRecommandees): array
    {
        if (empty($specialitesRecommandees)) {
            return [];
        }
        
        $criteria = $urgence ? ['serviceUrgenceDispo' => true] : [];
        $tousHopitaux = $this->hopitalRepository->findBy($criteria);
        $hopitauxRelevants = [];
        
        foreach ($tousHopitaux as $hopital) {
            $specialitesHopital = $hopital->getSpecialitesArray();
            
            if (empty($specialitesHopital)) {
                continue;
            }
            
            $isPertinent = false;
            foreach ($specialitesRecommandees as $specRecommandee) {
                foreach ($specialitesHopital as $specHopital) {
                    if ($this->isRelevantSpecialty($specHopital, $specRecommandee)) {
                        $isPertinent = true;
                        break 2;
                    }
                }
            }
            
            if ($isPertinent) {
                $hopitauxRelevants[] = [
                    'id' => $hopital->getId(),
                    'nom' => $hopital->getNom(),
                    'adresse' => $hopital->getAdresse(),
                    'telephone' => $hopital->getTel(),
                    'urgences' => $hopital->isServiceUrgenceDispo(),
                    'capacite' => $hopital->getCapacite(),
                    'specialites' => $specialitesHopital,
                    'pertinent' => true,
                    'local' => true,
                ];
            }
        }
        
        return $hopitauxRelevants;
    }

    /**
     * ✅ Vérifie si une spécialité est pertinente
     */
    private function isRelevantSpecialty(string $spec1, string $spec2): bool
    {
        $spec1Lower = strtolower($spec1);
        $spec2Lower = strtolower($spec2);
        
        // Correspondances exactes ou partielles
        if (stripos($spec1Lower, $spec2Lower) !== false || stripos($spec2Lower, $spec1Lower) !== false) {
            return true;
        }
        
        // Groupes de spécialités similaires
        $keywords = [
            'cardio' => ['cardiologie', 'cardiovasculaire', 'cardiaque', 'coeur'],
            'diabeto' => ['diabétologie', 'diabète', 'endocrinologie', 'métabolique'],
            'nephro' => ['néphrologie', 'rein', 'rénal', 'dialyse'],
            'neuro' => ['neurologie', 'neurologique', 'neuro', 'cerveau'],
            'gastro' => ['gastro-entérologie', 'digestif', 'gastro', 'intestin'],
            'pneumo' => ['pneumologie', 'respiratoire', 'poumon', 'respiration'],
            'hepato' => ['hépatologie', 'foie', 'hépatique'],
        ];
        
        foreach ($keywords as $group) {
            $match1 = false;
            $match2 = false;
            
            foreach ($group as $keyword) {
                if (stripos($spec1Lower, $keyword) !== false) $match1 = true;
                if (stripos($spec2Lower, $keyword) !== false) $match2 = true;
            }
            
            if ($match1 && $match2) {
                return true;
            }
        }
        
        return false;
    }

    /**
     * ✅ Statistiques 100% DYNAMIQUES
     */
    private function generateDynamicStatistics(array $dossier, array $analysis): array
    {
        return [
            'scores_systemes' => $analysis['score_details'] ?? $this->calculateDefaultScores($dossier),
            'indicateurs_performance' => $analysis['indicateurs_performance'] ?? $this->calculatePerformanceIndicators($dossier),
            'nombre_facteurs_risque' => count($analysis['facteurs_risque'] ?? []),
            'nombre_complications_potentielles' => count($analysis['complications_potentielles'] ?? []),
        ];
    }

    /**
     * ✅ Scores par défaut basés sur les données
     */
    private function calculateDefaultScores(array $dossier): array
    {
        $baseScore = 85;
        
        // Pénalités selon les pathologies
        if (!empty($dossier['maladies_chroniques'])) {
            $baseScore -= 15;
        }
        if (!empty($dossier['antecedents_medicaux'])) {
            $baseScore -= 10;
        }
        
        return [
            'cardiovasculaire' => $baseScore,
            'metabolique' => $baseScore - 5,
            'respiratoire' => $baseScore + 5,
            'renal' => $baseScore,
            'hepatique' => $baseScore + 10,
            'neurologique' => $baseScore + 5,
        ];
    }

    /**
     * ✅ Indicateurs de performance dynamiques
     */
    private function calculatePerformanceIndicators(array $dossier): array
    {
        $base = 70;
        
        if (!empty($dossier['traitements_en_cours'])) {
            $adherence = 75;
        } else {
            $adherence = 50;
        }
        
        return [
            'adherence_traitement' => $adherence,
            'controle_pathologie' => $base,
            'qualite_vie' => $base + 5,
            'risque_complications' => 100 - $base,
        ];
    }

    /**
     * Recommandations par défaut
     */
    private function getFallbackRecommendations(array $dossierData): array
    {
        return [
            'gravite' => 'modere',
            'score_sante' => 70,
            'specialites_recommandees' => ['Médecine générale'],
            'urgence' => false,
            'resume_cas' => 'Service d\'analyse temporairement indisponible. Veuillez consulter un médecin généraliste.',
            'recommandations' => ['Consulter un médecin généraliste'],
            'examens_suggeres' => ['Bilan de santé complet'],
            'medecins_locaux' => [],
            'medecins_internationaux' => [],
            'hopitaux_locaux' => [],
            'hopitaux_internationaux' => [],
            'statistiques' => [
                'scores_systemes' => $this->calculateDefaultScores($dossierData),
                'indicateurs_performance' => $this->calculatePerformanceIndicators($dossierData),
            ],
        ];
    }
}