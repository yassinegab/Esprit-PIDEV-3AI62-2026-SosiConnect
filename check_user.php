<?php

use App\Kernel;
use App\Entity\User;
use Symfony\Component\Dotenv\Dotenv;

require __DIR__.'/vendor/autoload.php';

(new Dotenv())->bootEnv(__DIR__.'/.env');

$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$kernel->boot();

$container = $kernel->getContainer();
$em = $container->get('doctrine')->getManager();

$user = $em->getRepository(User::class)->findOneBy(['email' => 'yassine.gabsi@esprit.tn']);

if (!$user) {
    echo "User not found.\n";
    exit;
}

echo "User ID: " . $user->getId() . "\n";
echo "Roles (array): " . implode(', ', $user->getRoles()) . "\n";
echo "UserRole (enum): " . ($user->getUserRole()->value ?? 'NULL') . "\n";
