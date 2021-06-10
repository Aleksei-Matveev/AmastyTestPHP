<?php
require_once ('IChessmen.php');
abstract class AbstractChessmen implements IChessmen
{
    /**
     * @var string
     */
    protected $x;
    /**
     * @var string
     */
    protected $y;

    public function getPosition(): array
    {
        return [$this->x, $this->y];
    }
    public function __construct(string $x, string $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

