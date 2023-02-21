<?php
chdir(__DIR__ . '/../');

ini_set('log_errors', true);
ini_set('error_log', 'error_log');
ini_set('display_errors', false);
ini_set('error_reporting', E_ALL);

use Slim\Factory\AppFactory;

// Подключаем autoload
require 'vendor/autoload.php';

// Создаем приложение
$app = AppFactory::create();

// Обработка и отображение ошибок
$app->addErrorMiddleware(true, true, true);

$app->group('', include 'app/routes/root.php');

$app->run();
