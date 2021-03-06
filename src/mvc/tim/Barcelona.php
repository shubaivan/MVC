<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 29.10.14
 * Time: 22:34
 */

namespace mvc\tim;


class Barcelona extends AbstractFootballTim
{
    function __construct($trainer, $stadium, $captain)
    {
        parent::__construct($trainer, $stadium, $captain);
    }
    public function show()
    {
        return sprintf('trainer %s stadium in %s captain %s',$this->getTrainer(), $this->getStadium(), $this->getCaptain());
    }

}