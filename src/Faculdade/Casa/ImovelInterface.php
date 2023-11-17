<?php 

declare(strict_types=1);

namespace Daniel\CursoPooPhp\Faculdade\Heranca;

interface ImovelInterface
{
    public function setPorcentagemAdicional(Float $porcentagemAdicional ): void;
    public function getPorcentagemAdicional(): float;
    public function valor(): float;

}