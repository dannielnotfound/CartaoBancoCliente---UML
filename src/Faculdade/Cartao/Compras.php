<?php
declare(strict_types=1);

namespace Daniel\CursoPooPhp\Faculdade\Cartao;

class Compras
{   
    // private int    $codigoProduto;
    private string $nome;
    private int    $quantidade;
    private float  $preco;

    public function __construct(
        string $nome,
        int    $quantidade,
        float  $preco
    )
    {
        $this->setNome($nome);
        $this->setQuantidade($quantidade);
        $this->setPreco($preco);
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function setNome($nome):void
    {
        $this->nome = $nome;
    }

    public function getQuantidade():int
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade):void
    {
        $this->quantidade = $quantidade;
    }

    public function getPreco():float
    {
        return $this->preco;
    }

    public function setPreco($preco):void
    {
        $this->preco = $preco;
    }

    public function getProdutoInfo(): array
    {
        return [$this->nome, $this->quantidade, $this->preco];
    }
}