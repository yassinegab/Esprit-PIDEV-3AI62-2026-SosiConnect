<?php

namespace App\Command;

use App\Entity\Urgence;
use App\Service\EmailService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'email:urgence',
    description: 'Test urgency email notification',
)]
class EmailUrgenceCommand extends Command
{
    public function __construct(
        private readonly EmailService $emailService
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('email', InputArgument::OPTIONAL, 'Email address', 'dhiamejdi@gmail.com')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $email = $input->getArgument('email');

        $io->title('🚨 Testing Urgency Email');

        // Create fake urgency for testing
        $urgence = new Urgence();
        $urgence->setLatitude(36.8065);
        $urgence->setLongitude(10.1815);
        $urgence->setMessage('Test urgency notification');
        $urgence->setStatut('EN_ATTENTE');
        $urgence->setDateUrgence(new \DateTime());

        try {
            $this->emailService->sendUrgencyNotification($email, 'Test Contact', $urgence);
            $io->success('✅ Urgency email sent to: ' . $email);
            $io->note('Check your inbox (and spam folder)');
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $io->error('❌ Error: ' . $e->getMessage());
            $io->note('Stack trace: ' . $e->getTraceAsString());
            return Command::FAILURE;
        }
    }
}
