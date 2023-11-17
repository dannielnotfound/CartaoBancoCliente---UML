<?php
declare(strict_types=1);

namespace Daniel\CursoPooPhp\Estudos;

use Daniel\CursoPooPhp\Estudos\Pessoa;

class PessoaEstrangeira extends PessoaFisica
{
    
    public function setCpf(string $cpf):void
    {
        $this->cpf  = $cpf;
    }

}