<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:fix-passwords',
    description: 'Hash les mots de passe en texte clair dans la base de données',
)]
class FixPasswordsCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $em,
        private UserPasswordHasherInterface $passwordHasher
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $users = $this->em->getRepository(User::class)->findAll();
        $count = 0;
        
        foreach ($users as $user) {
            $password = $user->getPassword();
            
            // Si le mot de passe n'est pas déjà hashé
            if ($password && !str_starts_with($password, '$2y$') && !str_starts_with($password, '$argon2')) {
                $hashedPassword = $this->passwordHasher->hashPassword($user, $password);
                $user->setPassword($hashedPassword);
                
                $io->success("✅ Mot de passe hashé pour : " . $user->getEmail());
                $count++;
            }
        }
        
        if ($count > 0) {
            $this->em->flush();
            $io->success("🎉 {$count} mot(s) de passe mis à jour !");
        } else {
            $io->info("ℹ️  Tous les mots de passe sont déjà hashés.");
        }
        
        return Command::SUCCESS;
    }
}