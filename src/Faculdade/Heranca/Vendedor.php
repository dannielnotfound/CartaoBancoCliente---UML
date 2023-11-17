<?php
declare(strict_types=1);

namespace Daniel\CursoPooPhp\Faculdade\Heranca;

class Vendedor extends Empregado
{
    private string $departamento;
    private float  $comissao;

    public function setComissao(float $comissao):void 
    {
        $this->comissao = $comissao;    
    }

    public function setDepartamento(string $departamento):void 
    {
        $this->departamento = $departamento;    
    }

    public function getSalarioAnualVendedor()
    {
        return $this->getSalarioAnual() + (($this->getSalario() * $this->comissao) / 100) * 12;
    }
    
}