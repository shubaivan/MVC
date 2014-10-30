<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 30.10.14
 * Time: 12:03
 */
namespace mvc;

require_once '../../vendor/autoload.php';

use mvc\tim\Barcelona;
use mvc\tim\RealMadrid;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$Barcelona = new Barcelona('Luis Enrique','Camp Nou','Xavier ');
echo $Barcelona->show().'<br>';

$RealMadrid = new RealMadrid('Carlo Ancelotti','Santiago Bernabeu','Casillas');
echo $RealMadrid->show().'<br>';
echo ' Champions League - '. $RealMadrid->LC().'<br>';

echo '<br>';

$response = new Response();

$response->setContent('<html><body><h1>'.$RealMadrid->LC().'</h1></body></html>');
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');

// prints the HTTP headers followed by the content
$response->send();