<?php

namespace Daniel\CursoPooPhp;

class Vendedor
{
    private string $nome;
    private string $email;
    private float $salarioBase;
    private float $porcentagemComissao;
    private float $totalVendido;

    public function __construct(
        string $nome,
        string $email,
        float $salarioBase,
        float $porcentagemComissao

    )
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSalarioBase($salarioBase);
        $this->setPorcentagemComissao($porcentagemComissao);
    }

    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }

    public function setEmail(string $email):void
    {
        $this->email = $email;
    }

    public function setSalarioBase(float $salarioBase):void
    {
        $this->salarioBase = $salarioBase;
    }

    public function setPorcentagemComissao(float $porcentagemComissao):void
    {
        $this->porcentagemComissao = $porcentagemComissao;
    }

    public function setTotalVendido(float $totalVendido):void
    {
        $this->totalVendido = $totalVendido;
    }

    public function fazerFazer(float $valorVenda)
    {
        
    }
}