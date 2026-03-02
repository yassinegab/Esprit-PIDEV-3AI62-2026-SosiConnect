<?php

namespace App\Command;

use App\Service\EmailService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:send-mail',
    description: 'Send a test email via Mailtrap',
)]
class SendMailCommand extends Command
{
    public function __construct(
        private readonly EmailService $emailService
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('email', InputArgument::OPTIONAL, 'Email address to send test to', 'test@example.com')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $email = $input->getArgument('email');

        $io->title('📧 Mailtrap Email Test');
        $io->text('Sending test email to: ' . $email);

        try {
            $this->emailService->sendTestEmail($email);
            $io->success('✅ Email sent successfully!');
            $io->note('Check your Mailtrap inbox: https://mailtrap.io/inboxes');
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $io->error('❌ Error: ' . $e->getMessage());
            $io->note('Check your MAILER_DSN configuration in .env');
            return Command::FAILURE;
        }
    }
}
