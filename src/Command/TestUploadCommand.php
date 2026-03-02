<?php

namespace App\Command;

use App\Entity\Don;
use App\Entity\Donneur;
use App\Entity\SupportTicket;
use App\Entity\VideoTutorial;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\HttpFoundation\File\File;

#[AsCommand(
    name: 'app:test-upload',
    description: 'Test file uploads for all entities',
)]
class TestUploadCommand extends Command
{
    public function __construct(
        private readonly EntityManagerInterface $em
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('type', InputArgument::OPTIONAL, 'Upload type (don, donneur, support, tutorial)', 'all')
            ->addOption('file', 'f', InputOption::VALUE_OPTIONAL, 'File path to test upload')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $type = $input->getArgument('type');
        $filePath = $input->getOption('file');

        $io->title('Testing File Uploads');

        $dirs = [
            'dons' => 'public/uploads/dons',
            'donneurs' => 'public/uploads/donneurs',
            'support' => 'public/uploads/support',
            'tutorials' => 'public/uploads/tutorials',
            'medical' => 'public/uploads/medical',
        ];

        $io->section('Checking Upload Directories');
        foreach ($dirs as $name => $dir) {
            if (is_dir($dir)) {
                $io->success("$name: $dir exists");
            } else {
                $io->warning("$name: $dir (missing - creating...)");
                mkdir($dir, 0755, true);
            }
        }

        if ($filePath && file_exists($filePath)) {
            $io->section('Testing File Upload');
            
            $file = new File($filePath);
            $io->text("File: " . $file->getFilename());
            $io->text("Size: " . $this->formatSize($file->getSize()));
            $io->text("Mime: " . $file->getMimeType());

            switch ($type) {
                case 'don':
                    $this->testDonUpload($file, $io);
                    break;
                case 'donneur':
                    $this->testDonneurUpload($file, $io);
                    break;
                case 'support':
                    $this->testSupportUpload($file, $io);
                    break;
                case 'tutorial':
                    $this->testTutorialUpload($file, $io);
                    break;
                default:
                    $io->note('Use --type=don, donneur, support, or tutorial');
            }
        } else {
            $io->note('Provide a file to test: php bin/console app:test-upload don --file=path/to/file.pdf');
        }

        $io->section('Upload Summary');
        
        $donCount = $this->em->getRepository(Don::class)->count(['documentName' => null]);
        $donneurCount = $this->em->getRepository(Donneur::class)->count(['profileImageName' => null]);
        
        $io->text("Don waiting for documents: $donCount");
        $io->text("Donneurs waiting for images: $donneurCount");

        $io->success('Upload test complete!');
        return Command::SUCCESS;
    }

    private function testDonUpload(File $file, SymfonyStyle $io): void
    {
        $don = new Don();
        $don->setTypeDon('sang');
        $don->setRegion('Test');
        $don->setDocumentFile($file);
        
        $this->em->persist($don);
        $this->em->flush();
        
        $io->success("Don upload successful! ID: " . $don->getId());
        $io->text("Document: " . $don->getDocumentName());
    }

    private function testDonneurUpload(File $file, SymfonyStyle $io): void
    {
        $donneur = new Donneur();
        $donneur->setNom('Test');
        $donneur->setPrenom('Upload');
        $donneur->setAge(25);
        $donneur->setTelephone('12345678');
        $donneur->setGroupeSanguin('A+');
        $donneur->setProfileImageFile($file);
        
        $this->em->persist($donneur);
        $this->em->flush();
        
        $io->success("Donneur upload successful! ID: " . $donneur->getId());
        $io->text("Image: " . $donneur->getProfileImageName());
    }

    private function testSupportUpload(File $file, SymfonyStyle $io): void
    {
        $ticket = new SupportTicket();
        $ticket->setSubject('Test Upload');
        $ticket->setDescription('Testing file upload');
        $ticket->setUserEmail('test@example.com');
        $ticket->setUserName('Test User');
        $ticket->setAttachmentFile($file);
        
        $this->em->persist($ticket);
        $this->em->flush();
        
        $io->success("Support upload successful! ID: " . $ticket->getId());
        $io->text("Attachment: " . $ticket->getAttachmentName());
    }

    private function testTutorialUpload(File $file, SymfonyStyle $io): void
    {
        $tutorial = new VideoTutorial();
        $tutorial->setTitle('Test Tutorial');
        $tutorial->setDescription('Testing thumbnail upload');
        $tutorial->setVideoUrl('https://youtube.com/test');
        $tutorial->setThumbnailFile($file);
        
        $this->em->persist($tutorial);
        $this->em->flush();
        
        $io->success("Tutorial upload successful! ID: " . $tutorial->getId());
        $io->text("Thumbnail: " . $tutorial->getThumbnailName());
    }

    private function formatSize(int $bytes): string
    {
        $units = ['B', 'KB', 'MB', 'GB'];
        $i = 0;
        while ($bytes >= 1024 && $i < count($units) - 1) {
            $bytes /= 1024;
            $i++;
        }
        return round($bytes, 2) . ' ' . $units[$i];
    }
}
