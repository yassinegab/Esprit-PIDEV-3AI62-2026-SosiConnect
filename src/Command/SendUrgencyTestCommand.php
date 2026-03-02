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
    name: 'app:send-urgency-test',
    description: 'Send test urgency email'
)]
class SendUrgencyTestCommand extends Command
{
    public function __construct(
        private readonly EmailService $emailService
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addArgument('email', InputArgument::OPTIONAL, 'Email address', 'test@example.com');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $email = $input->getArgument('email');

        $io->title('Testing Urgency Email');
        $io->text('Sending test urgency email to: ' . $email);

        try {
            $urgence = new Urgence();
            $urgence->setMessage('Test urgency notification');
            $urgence->setLatitude(36.8065);
            $urgence->setLongitude(10.1815);
            $urgence->setStatut('EN_ATTENTE');
            $urgence->setDateUrgence(new \DateTime());

            $this->emailService->sendUrgencyNotification($email, 'Test Contact', $urgence);

            $io->success('Test urgency email sent successfully');
            $io->note('Check your inbox and and spam folder');
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $io->error('Error: ' . $e->getMessage());
            $io->note('Make sure you have contacts with emails in the database');
            return Command::FAILURE;
        }
    }
}
