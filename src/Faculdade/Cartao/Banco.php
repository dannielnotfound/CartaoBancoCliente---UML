<?php
declare(strict_types=1);

namespace Daniel\CursoPooPhp\Faculdade\Cartao;

class Banco
{
    private string $nome;
    private string $endereco;
    private string $telefone;
    private string $gerente;
    
    public function __construct(
        string $nome,
        string $endereco,
        string $telefone,
        string $gerente
    )
    {
        $this->setNome($nome);
        $this->setEndereco($endereco);
        $this->setTelefone($telefone);
        $this->setGerente($gerente);
    }

    public function getNome():string
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getEndereco():string
    {
        return $this->endereco;
    }


    public function setEndereco($endereco):void
    {
        $this->endereco = $endereco;
    }


    public function getTelefone():string
    {
        return $this->telefone;
    }

    public function setTelefone($telefone):void
    {
        $this->telefone = $telefone;
    }

    public function getGerente():string
    {
        return $this->gerente;
    }

    public function setGerente($gerente):void
    {
        $this->gerente = $gerente;
    }
}