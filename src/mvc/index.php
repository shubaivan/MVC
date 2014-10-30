<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 30.10.14
 * Time: 12:03
 */
namespace mvc;

require_once '../../vendor/autoload.php';

use mvc\Controllers;
use mvc\tim\Barcelona;
use mvc\tim\RealMadrid;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;




$RealMadrid = new RealMadrid('Carlo Ancelotti','Santiago Bernabeu','Casillas');
echo $RealMadrid->show().'<br>';
echo ' Champions League - '. $RealMadrid->LC().'<br>';

echo '<br>';

/*$request = Request::createFromGlobals();
// запрошенный URI (на пример /about) без query parameters
$request->getPathInfo();

// получаем GET и POST переменные соответственно
$request->query->get('foo');
$request->request->get('bar');

// получаем экземпляр UploadedFile определяемый идентификатором foo
$request->files->get('foo');

$request->getMethod();          // GET, POST, PUT, DELETE, HEAD
$request->getLanguages();       // массив языков, принимаемых клиентом

$response = new Response();

$response->setContent('<html><body><h1>'.$RealMadrid->LC().'</h1></body></html>');
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');

// prints the HTTP headers followed by the content
$response->send();*/

$request = Request::createFromGlobals();
$path = $request->getPathInfo(); // запрошенный URL

if (in_array($path, array(['', '/']))) {
$response = new Response('Welcome to the homepage.');
} elseif ($path == '/barcelona') {
    $response = new Controllers();
    $response->action_barcelona();
} else {
    $response = new Response('Page not found.', 404);
}
$response->send();

