<?php
declare(strict_types=1);

namespace Daniel\CursoPooPhp;

class Compra
{
    private string $nome;
    private float $precoUnitario;
    private int $quantidade;

    public function __construct(
        string $nome,
        float $precoUnitario,
        int $quantidade
    )
    {
        $this->setNome($nome);
        $this->setPrecoUnitario($precoUnitario);
        $this->setQuantidade($quantidade);
    }

    public function setNome(string $nome):void
    {   
        if(empty($nome)){
            $this->nome = 'Produto';
        }else{
            $this->nome = $nome;
        }
    }
    public function setPrecoUnitario(float $precoUnitario):void
    {
        if($precoUnitario < 0){
            $this->precoUnitario = 0;

        }else{
            $this->precoUnitario = $precoUnitario;
        }
    }
    public function setQuantidade(int $quantidade):void
    {   
        if($quantidade < 0){
            $this->quantidade = 0;

        }else{
            $this->quantidade = $quantidade;
        }   
    }


    public function getNome():string
    {
        return $this->nome;
    }

    public function getPrecoUnitario():float
    {
        return $this->precoUnitario;
    }

    public function getQuantidade():int
    {
        return $this->quantidade;
    }

    public function totalCompra():float
    {
        return $this->quantidade * $this->precoUnitario;
    }

}
