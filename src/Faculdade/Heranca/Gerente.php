<?php 
declare(strict_types=1);


namespace Daniel\CursoPooPhp\Faculdade\Heranca;


class Gerente extends Empregado
{
    private float  $bonusAnual;

    public function getBonusAnual()
    {
        return $this->bonusAnual;
    }

    public function setBonusAnual($bonusAnual)
    {
        $this->bonusAnual = $bonusAnual;
    }

    public  function salarioAnual(): float
    {
        return $this->getBonusAnual() + $this->bonusAnual;
    }
}