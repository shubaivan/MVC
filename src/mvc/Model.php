<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 30.10.14
 * Time: 22:37
 */
namespace mvc;

use mvc\tim\Barcelona;

class Model
{
    public function getBarcelonaParametrs()
    {
        $Barcelona = new Barcelona('Luis Enrique', 'Camp Nou', 'Xavier ');
        $Barcelona->show() . '<br>';
    }
}