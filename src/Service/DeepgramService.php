<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class DeepgramService
{
    private HttpClientInterface $httpClient;
    private string $apiKey;

    public function __construct(
        #[Autowire('%env(DEEPGRAM_API_KEY)%')] string $deepgramApiKey
    ) {
        $this->httpClient = HttpClient::create();
        $this->apiKey = $deepgramApiKey;
    }

    public function transcribe(string $audioData): array
    {
        try {
            $response = $this->httpClient->request('POST', 'https://api.deepgram.com/v1/listen', [
                'headers' => [
                    'Authorization' => 'Token ' . $this->apiKey,
                    'Content-Type' => 'audio/webm'
                ],
                'body' => $audioData
            ]);

            $data = $response->toArray();

            $transcript = $data['results']['channels'][0]['alternatives'][0]['transcript'] ?? '';
            $confidence = $data['results']['channels'][0]['alternatives'][0]['confidence'] ?? 0;

            return [
                'success' => true,
                'transcript' => $transcript,
                'confidence' => $confidence
            ];
        } catch (TransportExceptionInterface|ClientExceptionInterface|DecodingExceptionInterface|RedirectionExceptionInterface|ServerExceptionInterface $e) {
            return [
                'success' => false,
                'transcript' => '',
                'error' => $e->getMessage()
            ];
        }
    }

    public function transcribeFromFile(string $filePath): array
    {
        if (!file_exists($filePath)) {
            return [
                'success' => false,
                'transcript' => '',
                'error' => 'Audio file not found'
            ];
        }

        try {
            $audioContent = file_get_contents($filePath);

            $response = $this->httpClient->request('POST', 'https://api.deepgram.com/v1/listen', [
                'headers' => [
                    'Authorization' => 'Token ' . $this->apiKey,
                    'Content-Type' => 'audio/webm'
                ],
                'body' => $audioContent
            ]);

            $data = $response->toArray();

            $transcript = $data['results']['channels'][0]['alternatives'][0]['transcript'] ?? '';
            $confidence = $data['results']['channels'][0]['alternatives'][0]['confidence'] ?? 0;

            return [
                'success' => true,
                'transcript' => $transcript,
                'confidence' => $confidence
            ];
        } catch (TransportExceptionInterface|ClientExceptionInterface|DecodingExceptionInterface|RedirectionExceptionInterface|ServerExceptionInterface $e) {
            return [
                'success' => false,
                'transcript' => '',
                'error' => $e->getMessage()
            ];
        }
    }
}
