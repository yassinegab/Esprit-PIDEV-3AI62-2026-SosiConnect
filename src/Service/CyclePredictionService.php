<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class CyclePredictionService
{
    private const OPENROUTER_API_URL = 'https://openrouter.ai/api/v1/chat/completions';
    private const MODEL = 'meta-llama/llama-3.1-8b-instruct:free'; // Modèle gratuit via OpenRouter

    public function __construct(
        private HttpClientInterface $client,
        private string $openRouterApiKey
    ) {}

    /**
     * Analyse des cycles via OpenRouter AI ou calcul local si indisponible
     */
    public function analyzeCycles(array $cycleLengths, array $cycleDates = []): array
    {
        // Si pas de clé API ou pas assez de données pour l'IA, on fait un calcul local
        if (empty($this->openRouterApiKey) || count($cycleLengths) < 2) {
            return $this->calculateLocally($cycleLengths);
        }

        $lengthsStr = implode(', ', $cycleLengths);
        $datesStr = !empty($cycleDates) ? ' (dates: ' . implode(', ', $cycleDates) . ')' : '';

        $systemPrompt = <<<PROMPT
Tu es un assistant médical spécialisé en cycles menstruels. Analyse les données fournies et réponds en JSON valide avec cette structure exacte:
{
  "est_regulier": true ou false,
  "resume": "Court résumé de l'analyse (1-2 phrases)",
  "cycles_irreguliers": [{"index": 1, "duree": 25, "raison": "explication"}],
  "conseil": "Conseil personnalisé basé sur l'analyse",
  "prediction_prochain": "Prédiction du prochain cycle (ex: ~28 jours)",
  "recommandations": ["recommendation 1", "recommendation 2"]
}
Réponds uniquement avec le JSON, sans markdown ni texte avant/après. Si tous les cycles sont normaux, cycles_irreguliers doit être un tableau vide.
PROMPT;

        $userPrompt = "Durées des cycles en jours: $lengthsStr$datesStr. Analyse ces données et détermine si le cycle est régulier ou irrégulier. Un cycle normal fait 21 à 35 jours. Fournis une analyse complète.";

        try {
            $response = $this->client->request('POST', self::OPENROUTER_API_URL, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->openRouterApiKey,
                    'Content-Type' => 'application/json',
                    'HTTP-Referer' => 'http://localhost', // Requis par OpenRouter
                    'X-Title' => 'SmartHealth AI', // Requis par OpenRouter
                ],
                'json' => [
                    'model' => self::MODEL,
                    'messages' => [
                        ['role' => 'system', 'content' => $systemPrompt],
                        ['role' => 'user', 'content' => $userPrompt],
                    ],
                    'temperature' => 0.3,
                    'max_tokens' => 1000,
                ],
                'timeout' => 10, // Augmenté pour OpenRouter qui peut être plus lent avec les modèles gratuits
            ]);

            $statusCode = $response->getStatusCode();
            if ($statusCode !== 200) {
                // Si l'API échoue, on bascule sur le calcul local
                return $this->calculateLocally($cycleLengths, "Service IA indisponible (HTTP $statusCode). Analyse locale effectuée.");
            }

            $data = $response->toArray();
            $content = $data['choices'][0]['message']['content'] ?? '';

            $decoded = $this->parseJsonResponse($content);
            if (empty($decoded)) {
                return $this->calculateLocally($cycleLengths, "Réponse IA invalide. Analyse locale effectuée.");
            }

            return [
                'est_regulier' => $decoded['est_regulier'] ?? true,
                'resume' => $decoded['resume'] ?? $content,
                'cycles_irreguliers' => $decoded['cycles_irreguliers'] ?? [],
                'conseil' => $decoded['conseil'] ?? '',
                'prediction_prochain' => $decoded['prediction_prochain'] ?? '',
                'recommandations' => $decoded['recommandations'] ?? [],
                'source' => 'AI'
            ];
        } catch (\Throwable $e) {
            // En cas d'erreur (réseau, timeout, etc.), on utilise le calcul local
            return $this->calculateLocally($cycleLengths, "Erreur connexion IA: " . $e->getMessage());
        }
    }

    /**
     * Algorithme de secours pour analyser les cycles sans IA
     */
    private function calculateLocally(array $lengths, string $message = ''): array
    {
        if (empty($lengths)) {
            return [
                'est_regulier' => true,
                'resume' => "Pas assez de données pour une analyse.",
                'cycles_irreguliers' => [],
                'conseil' => "Enregistrez plus de cycles pour obtenir des prédictions précises.",
                'prediction_prochain' => "Inconnu",
                'recommandations' => ["Continuez à suivre vos cycles régulièrement."],
                'source' => 'Local'
            ];
        }

        $average = array_sum($lengths) / count($lengths);
        $min = min($lengths);
        $max = max($lengths);
        $variance = $max - $min;

        // Définition de la régularité (écart max de 7 jours est souvent considéré comme normal, ici on met 5 pour être strict)
        $estRegulier = $variance <= 5;

        // Identification des cycles anormaux (hors 21-35 jours)
        $cyclesIrreguliers = [];
        foreach ($lengths as $index => $length) {
            if ($length < 21 || $length > 35) {
                $cyclesIrreguliers[] = [
                    'index' => $index,
                    'duree' => $length,
                    'raison' => $length < 21 ? "Cycle court (< 21 jours)" : "Cycle long (> 35 jours)"
                ];
            }
        }

        // Si beaucoup de variance mais dans les normes, c'est quand même un peu irrégulier
        if (!$estRegulier && empty($cyclesIrreguliers)) {
            $estRegulier = false;
            $cyclesIrreguliers[] = [
                'index' => -1,
                'duree' => round($variance),
                'raison' => "Variation importante entre les cycles ($min à $max jours)"
            ];
        }

        $prediction = round($average);

        $resume = $message ?: "Analyse basée sur vos " . count($lengths) . " derniers cycles. ";
        $resume .= "Moyenne de " . round($average, 1) . " jours. ";
        $resume .= $estRegulier ? "Vos cycles semblent réguliers." : "Variation détectée dans la durée de vos cycles.";

        $conseil = $estRegulier
            ? "Vos cycles sont réguliers, continuez votre suivi habituel."
            : "Vos cycles varient de $min à $max jours. Cela peut être normal ou lié au stress/fatigue.";

        return [
            'est_regulier' => $estRegulier,
            'resume' => $resume,
            'cycles_irreguliers' => $cyclesIrreguliers,
            'conseil' => $conseil,
            'prediction_prochain' => "~$prediction jours",
            'recommandations' => [
                "Maintenez une alimentation équilibrée",
                "Gérez votre stress",
                "Dormez suffisamment"
            ],
            'source' => 'Local'
        ];
    }

    private function parseJsonResponse(string $content): array
    {
        $content = trim($content);
        // Tentative d'extraction du JSON si le LLM a bavardé autour
        if (preg_match('/\{[\s\S]*\}/', $content, $matches)) {
            $json = json_decode($matches[0], true);
            if (json_last_error() === JSON_ERROR_NONE) {
                return $json;
            }
        }

        // Tentative directe
        $json = json_decode($content, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            return $json;
        }

        return [];
    }
}
