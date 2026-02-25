<?php

use App\Kernel;
use App\Entity\User;
use App\Entity\UserWellBeingData;
use App\Entity\Meal;
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
        
        $dataCount = $em->getRepository(UserWellBeingData::class)->count(['user' => $user]);
        echo "  - WellBeing Data: " . $dataCount . PHP_EOL;
        
        $mealCount = $em->getRepository(Meal::class)->count(['user' => $user]);
        echo "  - Meals: " . $mealCount . PHP_EOL;
        
        // StressPrediction might not be directly linked to user, but via UserWellBeingData
        // Let's check how it's linked.
        // Usually it's linked to UserWellBeingData.
        
        echo PHP_EOL;
    }
};
