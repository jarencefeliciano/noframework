<?php

use App\Core\App;
use Spatie\Ignition\Ignition;

error_reporting(0);

require dirname(__DIR__) . '/vendor/autoload.php';

Ignition::make()->register();

$app = new App();

$app->run();
