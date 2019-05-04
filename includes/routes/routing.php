<?php

// Namespaces
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface      as Response;
use \Boilerplate\Models      as TM;
use \Boilerplate\Views       as TV;
use \Boilerplate\Controllers as TC;

// Home
$app->get('/',  TC\PageController::class . ':getHome')->setName('home');
$app->post('/', TC\PageController::class . ':postHome');
