<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Строка 15: должно быть так
require __DIR__.'/../vendor/autoload.php';

// Строка 20: должно быть так
$app = require __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
