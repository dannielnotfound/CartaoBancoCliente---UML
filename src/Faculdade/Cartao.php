<?php 
declare(strict_types=1);

namespace Daniel\CursoPooPhp;

class Cartao
{
    private string $banco;
    private string $bandeira;
    private float $limite;
    private float $fatura;


    public function __construct(
        string $banco,
        string $bandeira,
        float  $limite,
        float $fatura = 0
    )
    {
        $this->setBanco($banco);
        $this->setBandeira($bandeira);
        $this->setLimite($limite);
        $this->setFatura($fatura);
    }

    public function setBanco(string $banco):void
    {
        $this->banco = $banco;
    }

    public function setBandeira(string $bandeira):void
    {
        $this->bandeira = $bandeira;
    }

    public function setLimite(float $limite):void
    {
        $this->limite = $limite;
    }

    public function setFatura(float $fatura):void
    {
        $this->fatura = $fatura;
    }


    public function getBanco():string
    {
        return $this->banco;
    }

    public function getBandeira():string
    {
        return $this->bandeira;
    }

    public function getLimite():float
    {
        return $this->limite;
    }

    public function getFatura():float
    {
        return $this->fatura;
    }

    public function fazerCompra(float $valorCompra)
    {
        if($valorCompra >= ($this->getLimite() - $this->getFatura()) || $valorCompra <= 0){
            return False;
        }

        $valorFatura = $this->getFatura();
        $valorFatura += $valorCompra;

        $this->setFatura($valorFatura);

        return True;
    }
}