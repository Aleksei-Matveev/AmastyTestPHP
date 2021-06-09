<?php
require_once ('IChessmen.php');
abstract class AbstractChessmen implements IChessmen
{
    /**
     * @var string
     */
    private $x;
    /**
     * @var string
     */
    private $y;

    public function getPosition():string
    {

        return $this->x . $this->y;
    }
    public function __construct(string $x, string $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

