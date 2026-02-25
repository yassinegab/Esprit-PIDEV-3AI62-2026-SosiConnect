<?php
namespace App\Service;

use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;

class SmsService
{
    private Client $client;
    private string $from;

    public function __construct(string $sid, string $token, string $from)
    {
        $this->client = new Client($sid, $token);
        $this->from = $from;
    }

    public function sendSms(string $to, string $message)
    {
        try {
            $result = $this->client->messages->create(
                $to,
                [
                    'from' => $this->from,
                    'body' => $message
                ]
            );

            // Affiche l'ID du message pour debug
            dump($result->sid);

            return $result;
        } catch (TwilioException $e) {
            dump('Erreur Twilio : '.$e->getMessage());
        }
    }
}