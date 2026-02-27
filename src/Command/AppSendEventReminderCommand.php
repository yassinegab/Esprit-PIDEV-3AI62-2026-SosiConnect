<?php
namespace App\Command;

use App\Repository\EventRepository;
use App\Repository\UserRepository;
use App\Service\SmsService;
use DateTime;
use DateInterval;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AppSendEventReminderCommand extends Command
{
    protected static $defaultName = 'app:send-event-reminder';

    private EventRepository $eventRepository;
    private UserRepository $userRepository;
    private SmsService $smsService;
    private string $verifiedNumber;

    public function __construct(
        EventRepository $eventRepository,
        UserRepository $userRepository,
        SmsService $smsService,
        string $verifiedNumber // injecté depuis services.yaml
    ) {
        parent::__construct();
        $this->eventRepository = $eventRepository;
        $this->userRepository = $userRepository;
        $this->smsService = $smsService;
        $this->verifiedNumber = $verifiedNumber;
    }

    protected function configure(): void
    {
        $this->setDescription('Envoie un SMS de rappel pour les événements dans 24h à un numéro vérifié');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if (!$this->verifiedNumber) {
            $output->writeln('Erreur : TWILIO_VERIFIED_TO est vide !');
            return Command::FAILURE;
        }

        $now = new DateTime();
        $tomorrow = (clone $now)->add(new DateInterval('P1D'));

        $events = $this->eventRepository->createQueryBuilder('e')
            ->where('e.date BETWEEN :now AND :tomorrow')
            ->setParameter('now', $now)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getResult();

        if (!$events) {
            $output->writeln('Aucun événement dans 24h.');
            return Command::SUCCESS;
        }

        foreach ($events as $event) {
            $message = "Rappel: L'événement '{$event->getTitle()}' aura lieu le "
                       . $event->getDate()->format('d/m/Y H:i');

            $this->smsService->sendSms($this->verifiedNumber, $message);

            $output->writeln("Rappel envoyé pour l'événement : " . $event->getTitle());
        }

        return Command::SUCCESS;
    }
}