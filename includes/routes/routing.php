<?php

// Namespaces
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface      as Response;
use \Template\Models      as TM;
use \Template\Views       as TV;
use \Template\Controllers as TC;

// Home
$app->get('/',  TC\PageController::class . ':getHome')->setName('home');
$app->post('/', TC\PageController::class . ':postHome');
