<?php
declare(strict_types=1);

namespace Daniel\CursoPooPhp\Estudos;

use Daniel\CursoPooPhp\Estudos\Pessoa;
use Daniel\CursoPooPhp\Estudos\PessoaJuridicaInterface;

class PessoaJuridica extends Pessoa implements PessoaJuridicaInterface
{
    protected string $cnpj;

    public function __construct(string $cnpj)
    {   
       $this->cnpj = $cnpj;
    }

    public function getCnpj():string
    {
        return $this->cnpj;
    }

    public function getName(): string
    {
        return $this->name;
    }

}