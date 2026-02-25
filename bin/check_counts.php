<?php

use App\Kernel;
use App\Entity\UserWellBeingData;
use App\Entity\Meal;
use App\Entity\StressPrediction;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\HttpFoundation\Request;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    $kernel = new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
    $kernel->boot();
    $container = $kernel->getContainer();
    $em = $container->get('doctrine')->getManager();

    echo "UserWellBeingData count: " . $em->getRepository(UserWellBeingData::class)->count([]) . PHP_EOL;
    echo "Meal count: " . $em->getRepository(Meal::class)->count([]) . PHP_EOL;
    echo "StressPrediction count: " . $em->getRepository(StressPrediction::class)->count([]) . PHP_EOL;
};
