<?php

class Quadrado
{
    public $lado;
    public $area;
    public $perimetro;

    public function __construct(
        float $lado,
    )
    {
        $this->lado = $lado;

        $this->area = $lado**2;
        $this->perimetro = 4 * $this->lado;
    }
}

$a = new Quadrado(23.32132);
var_dump($a);