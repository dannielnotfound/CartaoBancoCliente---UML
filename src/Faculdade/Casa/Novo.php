<?php
declare(strict_types=1);

namespace Daniel\CursoPooPhp\Faculdade\Casa;

use Daniel\CursoPooPhp\Faculdade\Heranca\ImovelInterface;

class Novo extends Imovel implements ImovelInterface
{
    private float $porcentagemAdicional = 0;

    public function setPorcentagemAdicional(float $porcentagemAdicional):void
    {
        $this->porcentagemAdicional = $porcentagemAdicional;
    }

    public function getPorcentagemAdicional(): float
    {
        return $this->porcentagemAdicional;
    }

    public function valor(): float
    {
        return $this->getPreco() + ($this->porcentagemAdicional * $this->getPreco()) / 100;
    }

}