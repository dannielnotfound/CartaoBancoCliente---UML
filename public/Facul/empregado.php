<?php

require '../vendor/autoload.php';

use Daniel\CursoPooPhp\Empregado;

$empregado = new Empregado('Daniel', 'Oliveira', 'Admnistrativo', 2800);
$empregado2 = new Empregado('Lucas', 'Silva', 'RH', 2100);

function printaTela(Empregado $empregado)
{
    echo "<p>O funcionário {$empregado->getNome()} {$empregado->getSobrenome()} é do setor {$empregado->getSetor()} e possúi salário mensal de R$ {$empregado->getSalarioMensal()}. O seu salário anual é de R$ {$empregado->salarioAnual()}</p>";
}

printaTela($empregado);
printaTela($empregado2);
