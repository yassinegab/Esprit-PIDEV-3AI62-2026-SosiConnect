<?php

namespace App\Command;

use App\Service\EmailService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'email:test',
    description: 'Send a test email via Mailtrap',
)]
class EmailTestCommand extends Command
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

        $io->title('🧪 Testing Email Configuration');
        $io->text(sprintf('Sending test email to: %s', $email));

        try {
            $success = $this->emailService->sendTestEmail($email);

            if ($success) {
                $io->success('✅ Email sent successfully! Check your Mailtrap inbox.');
                $io->note('Mailtrap URL: https://mailtrap.io/inboxes');
                return Command::SUCCESS;
            } else {
                $io->error('❌ Failed to send email. Check your MAILER_DSN configuration.');
                return Command::FAILURE;
            }
        } catch (\Exception $e) {
            $io->error(sprintf('❌ Error: %s', $e->getMessage()));
            return Command::FAILURE;
        }
    }
}
