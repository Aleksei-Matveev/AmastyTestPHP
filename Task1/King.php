<?php
require_once ('AbstractChessmen.php');
class King extends AbstractChessmen{

    /**
     * @param $x
     * @param $y
     * @return mixed
     * @throws Exception
     */
    function move($x, $y)
    {
        if($x <1 or $x > 8 or $y < 1 or $y > 8) throw new Exception('Координаты за пределами доски');

        if(abs($this->x - $x) <= 1 and abs($this->y - $y) <= 1){
            $this->x = $x;
            $this->y = $y;
        }else
            throw new Exception('Король так не может ходить');


    }
}