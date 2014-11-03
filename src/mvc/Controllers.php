<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 30.10.14
 * Time: 22:32
 */
namespace mvc;

use mvc\Model;
use Symfony\Component\HttpFoundation\Response;

class Controllers
{
    public  function barcelonaAction()
    {

        $b = Model::getBarcelonaParametrs();

        require 'Views/barcelonaView.php';


        $response = new Response();

        return $response;

    }

    public  function realAction()
    {

        $r = Model::getRealParametrs();

        require 'Views/realView.php';


        $response = new Response();

        return $response;

    }



}
