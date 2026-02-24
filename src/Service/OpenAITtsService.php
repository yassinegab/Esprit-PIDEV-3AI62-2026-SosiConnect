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

class OpenAITtsService
{
    private HttpClientInterface $httpClient;
    private string $apiKey;
    private string $model;
    private string $voice;

    public function __construct(
        #[Autowire('%env(OPENAI_TTS_API_KEY)%')] string $openAiApiKey,
        string $model = 'tts-1',
        string $voice = 'alloy'
    ) {
        $this->httpClient = HttpClient::create();
        $this->apiKey = $openAiApiKey;
        $this->model = $model;
        $this->voice = $voice;
    }

    public function synthesize(string $text): array
    {
        try {
            $response = $this->httpClient->request('POST', 'https://api.openai.com/v1/audio/speech', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json'
                ],
                'json' => [
                    'model' => $this->model,
                    'voice' => $this->voice,
                    'input' => $text,
                    'speed' => 1.0
                ]
            ]);

            $statusCode = $response->getStatusCode();
            
            if ($statusCode !== 200) {
                $errorContent = $response->getContent(false);
                return [
                    'success' => false,
                    'audio' => '',
                    'error' => 'API returned status ' . $statusCode . ': ' . substr($errorContent, 0, 500)
                ];
            }

            $audioContent = $response->getContent();
            $headers = $response->getHeaders(false);

            return [
                'success' => true,
                'audio' => base64_encode($audioContent),
                'contentType' => $headers['content-type'][0] ?? 'audio/mp3'
            ];
        } catch (ClientExceptionInterface $e) {
            $errorMessage = $e->getResponse()->getContent(false);
            return [
                'success' => false,
                'audio' => '',
                'error' => 'Client error: ' . substr($errorMessage, 0, 500)
            ];
        } catch (ServerExceptionInterface $e) {
            return [
                'success' => false,
                'audio' => '',
                'error' => 'Server error: ' . $e->getMessage()
            ];
        } catch (TransportExceptionInterface $e) {
            return [
                'success' => false,
                'audio' => '',
                'error' => 'Transport error: ' . $e->getMessage()
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'audio' => '',
                'error' => $e->getMessage()
            ];
        }
    }

    public function getVoice(): string
    {
        return $this->voice;
    }

    public function setVoice(string $voice): void
    {
        $this->voice = $voice;
    }
}
