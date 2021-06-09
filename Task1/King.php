<?php
require_once ('AbstractChessmen.php');
class King extends AbstractChessmen{

    /**
     * @param $x
     * @param $y
     * @return mixed
     */
    function move($x, $y)
    {
        $position = $this->getPosition();
    }
}