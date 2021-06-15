<?php
require_once('AbstractChessmen.php');

class Queen extends AbstractChessmen{

    /**
     * @param $x
     * @param $y
     * @return mixed
     * @throws Exception
     */
    function move($x, $y)
    {
        if($x < 1 or $x > 8 or $y < 1 or $y > 8) throw new Exception('Координаты за пределами доски');

        if(abs($this->x - $x) == abs($this->y - $y) or $this->x == $x or $this->y == $y) {
            $this->x = $x;
            $this->y = $y;
        }else
            throw new Exception('Ладья так не может ходить');
    }

}
