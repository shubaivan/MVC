<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 30.10.14
 * Time: 22:37
 */
namespace mvc;

use mvc\tim\Barcelona;
use mvc\tim\RealMadrid;

class Model
{
    public function getBarcelonaParametrs()
    {
        $Barcelona = new Barcelona('Luis Enrique', 'Camp Nou', 'Xavier ');

        $b['show'] = $Barcelona->show();
        return $b;

    }
    public function getRealParametrs()
    {
        $Real = new RealMadrid('Carlo Ancelotti','Santiago Bernabeu','Casillas');

        $r['show'] = $Real->show();
        return $r;

    }
}