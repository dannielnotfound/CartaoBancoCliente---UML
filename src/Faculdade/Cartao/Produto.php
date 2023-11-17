<?php
declare(strict_types=1);

namespace Daniel\CursoPooPhp\Faculdade\Cartao;

class Produto
{
    private string $sku;
    private string $nome;
    private float|int  $valor;
    
    public function __construct(
        string $sku,
        string $nome,
        float|int  $valor
    )
    {
        $this->setSku($sku);
        $this->setNome($nome);
        $this->setValor($valor);
    }

    public function getSku():string
    {
        return $this->sku;
    }


    public function setSku($sku):void
    {
        $this->sku = $sku;
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function setNome($nome):void
    {
        $this->nome = $nome;
    }


    public function getValor():float
    {
        return $this->valor;
    }

    public function setValor(float $valor):void
    {
        $this->valor = $valor;
    }
}