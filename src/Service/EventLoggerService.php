<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

/**
 * Service helper to log actions on Event entities.
 *
 * Usage example (in controller/subscriber):
 *   $this->eventLogger->logEvent('create', $event, 'additional info');
 */
class EventLoggerService
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $sosiEventLogger)
    {
        // the channel-specific logger is injected by name in services.yaml
        $this->logger = $sosiEventLogger;
    }

    /**
     * Log an action related to an Event by id.
     *
     * @param string      $action  e.g. 'create', 'update', 'delete'
     * @param int         $eventId identifier of the Event
     * @param string|null $details additional information
     */
    public function logEvent(string $action, int $eventId, ?string $details = null): void
    {
        $message = sprintf(
            'Action: %s | Event ID: %d | Details: %s',
            $action,
            $eventId,
            $details ?? 'none'
        );

        $this->logger->info($message);
    }
}