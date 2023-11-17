<?php 
declare(strict_types=1);

namespace Daniel\CursoPooPhp\Estudos;

use Daniel\CursoPooPhp\Estudos\Pessoa;
// Herança

class PessoaFisica extends Pessoa implements PessoaFisicaInterface
{
   public string    $cpf;
   public int       $age;
   public string    $gender;

   public function getCpf(): string
   {
      return $this->cpf;
   }

   public function getName(): string
   {
      return $this->name;
   }

}