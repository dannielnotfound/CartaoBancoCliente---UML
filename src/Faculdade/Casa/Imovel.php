<?php
declare(strict_types=1);

namespace Daniel\CursoPooPhp\Faculdade\Casa;

class Imovel
{   
    private string $endereco;
    protected float $preco;
    protected bool  $imovelNovo;
    
    public function __construct(string $endereco, float $preco)
    {
        $this->setEndereco($endereco);
        $this->setPreco($preco);
    }

    public function setEndereco(String $endereco) : void 
    {
        $this->endereco = $endereco;
    }

    public function setPreco(Float $preco) : void 
    {
        $this->preco = $preco;
    }
    
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }
}
