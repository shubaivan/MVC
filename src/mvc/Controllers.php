<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 30.10.14
 * Time: 22:32
 */
namespace mvc;

class Controllers
{
    function action_barcelona(){
        $b = new Model();
        $b->getBarcelonaParametrs();
        require 'Views/barcelonaView.php';
    }


}
