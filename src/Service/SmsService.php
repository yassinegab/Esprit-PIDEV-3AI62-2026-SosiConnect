<?php
namespace App\Service;

use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;

class SmsService
{
    private ?Client $client = null;
    private ?string $from = null;

    public function __construct(?string $sid, ?string $token, ?string $from)
    {
        if ($sid && $token && $from) {
            $this->client = new Client($sid, $token);
            $this->from = $from;
        }
    }

    public function isConfigured(): bool
    {
        return $this->client !== null;
    }

    public function sendSms(string $to, string $message)
    {
        if (!$this->isConfigured()) {
            // Service not configured, log or return null
            return null;
        }

        try {
            $result = $this->client->messages->create(
                $to,
                [
                    'from' => $this->from,
                    'body' => $message
                ]
            );

            return $result;
        } catch (TwilioException $e) {
            // Log error but don't crash
            return null;
        }
    }

    /**
     * Alias pour sendSms (utilisé dans certains contrôleurs)
     */
    public function send(string $to, string $message)
    {
        return $this->sendSms($to, $message);
    }
}