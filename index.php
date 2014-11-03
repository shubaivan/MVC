<?php

require_once 'vendor/autoload.php';

use mvc\Controllers;
use mvc\tim\Barcelona;
use mvc\tim\RealMadrid;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use mvc\Controller\ArticleController;
use mvc\Controller\IndexController;

use Phroute\RouteCollector;
use Phroute\Dispatcher;

$request = Request::createFromGlobals();

$loader = new Twig_Loader_Filesystem(__DIR__.'/app/views');
$twig = new Twig_Environment($loader);


$articleController = new ArticleController($twig);
$indexController = new IndexController($twig);

$router = new RouteCollector();

$router->get('/', [$indexController,'indexAction']);

$router->get('/articles/{id}', [$articleController,'getArticleAction']);
$router->put('/articles/{id}', [$articleController,'getArticleAction']);
$router->post('/articles/{id}', [$articleController,'getArticleAction']);
$router->delete('/articles/{id}', [$articleController,'getArticleAction']);
$router->get('/articles', [$articleController,'getArticlesAction']);

$dispatcher = new Dispatcher($router);
$response = $dispatcher->dispatch($request->getMethod(), parse_url($request->getPathInfo(), PHP_URL_PATH));

$response->send();



