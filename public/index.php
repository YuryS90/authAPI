<?php
chdir(__DIR__ . '/../');

ini_set('log_errors', true);
ini_set('error_log', 'error_log');
ini_set('display_errors', false);
ini_set('error_reporting', E_ALL);

use Slim\Factory\AppFactory;

// Подключаем autoload
require 'vendor/autoload.php';

// Создаем экземпляр контейнера
//$containerBuilder = new \DI\ContainerBuilder();
//
//$containerBuilder->addDefinitions(
//    //'app/dependencies.php',
//    //'app/settings.php',
//    //'app/repo.php',
//    //'app/middlewares.php',
//);
//
//$container = $containerBuilder->build();
//
//// Передаем контейнер в приложение
//AppFactory::setContainer($container);

// Создаем приложение
$app = AppFactory::create();

// Это $_POST. Включает парсинг json в getParsedBody()
//$app->addBodyParsingMiddleware();
//
//$app->add('sessionMiddleware');

// Обработка и отображение ошибок
$app->addErrorMiddleware(true, true, true);

$app->group('', include 'app/routes/root.php');

$app->run();
