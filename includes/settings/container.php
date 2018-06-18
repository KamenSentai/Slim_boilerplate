<?php

// Namespaces
use \Template\Models      as TM;
use \Template\Views       as TV;
use \Template\Controllers as TC;

// Container
$container = $app->getContainer();

// View
$container['view'] = function($container)
{
    // Initialize views
    $view   = new \Slim\Views\Twig('../includes/views');
    $router = $container->get('router');
    $uri    = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

    return $view;
};

// Database
$container['database'] = function($container)
{
    // Connect to database
    $db  = $container['settings']['database'];
    $pdo = new PDO('mysql:host='.$db['host'].';dbname='.$db['name'].';port='.$db['port'], $db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Connect to database
    $database = new TM\Database($pdo);

    return $database;
};