<?php

use App\Kernel;
use App\Entity\User;
use App\Entity\UserWellBeingData;
use App\Entity\StressPrediction;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    $kernel = new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
    $kernel->boot();
    $container = $kernel->getContainer();
    $em = $container->get('doctrine')->getManager();

    $users = $em->getRepository(User::class)->findAll();

    foreach ($users as $user) {
        echo "User: " . $user->getEmail() . " (ID: " . $user->getId() . ")" . PHP_EOL;
        
        $wellBeingData = $em->getRepository(UserWellBeingData::class)->findBy(['user' => $user]);
        $wbCount = count($wellBeingData);
        echo "  - WellBeing Data: " . $wbCount . PHP_EOL;
        
        $predictionCount = 0;
        foreach ($wellBeingData as $wb) {
            $predictions = $em->getRepository(StressPrediction::class)->findBy(['userWellBeingData' => $wb]);
            $predictionCount += count($predictions);
        }
        echo "  - Stress Predictions (via WellBeing): " . $predictionCount . PHP_EOL;
        
        // Also verify the repository method directly
        $repoPredictions = $em->getRepository(StressPrediction::class)->findAllForUser($user);
        echo "  - Stress Predictions (via Repository): " . count($repoPredictions) . PHP_EOL;
        
        echo PHP_EOL;
    }
};
