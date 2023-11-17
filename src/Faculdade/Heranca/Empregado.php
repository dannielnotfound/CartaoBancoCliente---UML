<?php 
declare(strict_types=1);


namespace Daniel\CursoPooPhp\Faculdade\Heranca;


class Empregado
{
    private string $nome;
    private float  $salario;

    public function __construct(String $nome, float $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }


    public function getNome():string
    {
        return $this->nome;
    }

    public function getSalario():float
    {
        return $this->salario;
    }

    public function getSalarioAnual():float
    {
        return $this->salario * 12;
    }
}