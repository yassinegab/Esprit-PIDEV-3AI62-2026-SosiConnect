<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CyclePredictionService
{
    private const GROQ_API_URL = 'https://api.groq.com/openai/v1/chat/completions';
    private const MODEL = 'llama-3.1-8b-instant';

    public function __construct(
        private HttpClientInterface $client,
        private string $groqApiKey
    ) {
    }

    /**
     * Analyse des cycles via Groq AI - détection régulier/irrégulier + conseils
     */
    public function analyzeCycles(array $cycleLengths, array $cycleDates = []): array
    {
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
            $response = $this->client->request('POST', self::GROQ_API_URL, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->groqApiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => self::MODEL,
                    'messages' => [
                        ['role' => 'system', 'content' => $systemPrompt],
                        ['role' => 'user', 'content' => $userPrompt],
                    ],
                    'temperature' => 0.3,
                ],
            ]);

            $data = $response->toArray();
            $content = $data['choices'][0]['message']['content'] ?? '';

            $decoded = $this->parseJsonResponse($content);

            return [
                'est_regulier' => $decoded['est_regulier'] ?? true,
                'resume' => $decoded['resume'] ?? $content,
                'cycles_irreguliers' => $decoded['cycles_irreguliers'] ?? [],
                'conseil' => $decoded['conseil'] ?? '',
                'prediction_prochain' => $decoded['prediction_prochain'] ?? '',
                'recommandations' => $decoded['recommandations'] ?? [],
                'raw' => $content,
            ];
        } catch (\Throwable $e) {
            throw new \RuntimeException('Erreur lors de l\'analyse IA: ' . $e->getMessage(), 0, $e);
        }
    }

    private function parseJsonResponse(string $content): array
    {
        $content = trim($content);
        if (preg_match('/\{[\s\S]*\}/', $content, $matches)) {
            $json = json_decode($matches[0], true);
            if (json_last_error() === JSON_ERROR_NONE) {
                return $json;
            }
        }
        return ['resume' => $content, 'conseil' => $content];
    }
}
