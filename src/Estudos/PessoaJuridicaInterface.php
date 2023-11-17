<?php 

declare(strict_types=1);

namespace Daniel\CursoPooPhp\Estudos;

interface PessoaJuridicaInterface
{
    /** 
       *Dentro de uma interface, só temos métodos e todos os métodos são públicos
       *Simplificando, isso serve para que nossas classes sigam contratos e a gente confiem nelas 
    */
  
    public function getCnpj(): string;
}