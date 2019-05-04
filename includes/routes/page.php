<?php

// Namespaces
use \Boilerplate\Models      as TM;
use \Boilerplate\Views       as TV;
use \Boilerplate\Controllers as TC;

// Home
$container['getHome'] = function($container) {
  // Data view
  $dataView = [

  ];
  return $dataView;
};
$container['postHome'] = function($container) {
  // Data view
  $dataView = [

  ];
  return $dataView;
};

// 404
$container['notFoundHandler'] = function($container) {
  return function($request, $response) use ($container) {
    $dataView = [

    ];
    return $container['view']->render($response->withStatus(404), 'pages/404.twig', $dataView);
  };
};
