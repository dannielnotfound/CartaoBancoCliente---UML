<?php
declare(strict_types=1);

namespace Daniel\CursoPooPhp;

class Empregado
{
    private $nome;
    private $sobrenome;
    private $setor;
    private $salarioMensal;
    // private $salarioMinimo = 1348.90;

    public function __construct(
        string $nome,
        string $sobrenome,
        string $setor,
        float $salarioMensal
    )
    {
        $this->setNome($nome);
        $this->setSobrenome($sobrenome);
        $this->setSetor($setor);
        $this->setSalarioMensal($salarioMensal);
    }

    public function setNome(string $nome):void
    {
        if(empty($nome)){
            $this->nome = 'Nome';
        }else{
            $this->nome = $nome;
        }
    }

    public function setSobrenome(string $sobrenome):void
    {
        if(empty($sobrenome)){
            $this->sobrenome = 'sobrenome';
        }else{
            $this->sobrenome = $sobrenome;
        }
    }

    public function setSetor(string $setor):void
    {
        if(empty($setor)){
            $this->setor = 'setor';
        }else{
            $this->setor = $setor;
        }
    }

    public function setSalarioMensal(float $salarioMensal):void
    {
        if($salarioMensal < 0){
            $this->salarioMensal = 0;
        }else{
            $this->salarioMensal = $salarioMensal;
        }
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function getSobrenome():string
    {
        return $this->sobrenome;
    }

    public function getSetor():string
    {
        return $this->setor;
    }

    public function getSalarioMensal():float
    {
        return $this->salarioMensal;
    }

    public function salarioAnual():float
    {
        return $this->salarioMensal * 12;
    }
}
