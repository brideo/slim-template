<?php
use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

error_reporting(E_ALL);

require_once __DIR__.'/../vendor/autoload.php';
$app = new Slim([
    'view' => new Twig()
]);

$app->container->singleton('db', function() {
    return new PDO("mysql:host=localhost;dbname=example;charset=utf8", "root", "password");
});

$view = $app->view();
$view->parserOptions = ['debug' => true];
$view->parserExtensions = [new TwigExtension()];
$view->setTemplatesDirectory(__DIR__.'/views');

require_once __DIR__.'/routes.php';

$app->run();
