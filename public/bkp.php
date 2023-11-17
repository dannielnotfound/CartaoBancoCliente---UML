<?php

require '../vendor/autoload.php';

use Daniel\CursoPooPhp\Estudos\PessoaFisica;
use Daniel\CursoPooPhp\Estudos\PessoaJuridica;
use Daniel\CursoPooPhp\Estudos\Pessoa;
use Daniel\CursoPooPhp\Estudos\PessoaEstrangeira;

echo "Hello World!";

// use Daniel\CursoPooPhp\PessoaJuridica;

$daniel =  new PessoaFisica;
$daniel->name = 'Daniel';
$daniel->age = 18;
// $daniel->cpf = '32165498723';
$daniel->gender = 'M';
$daniel->cpf = '49917537830';
dump($daniel->getCpf());


$nexxt = new PessoaJuridica('123123123');
$nexxt->name = 'Nexxt Tecnologia';
dump($nexxt->getCnpj());

$john = new PessoaEstrangeira();
$john->name = 'john';
$john->age = 27;
$john->setCpf('123456789132');
$john->gender = 'M';

dump($john);


// function getName(Pessoa $class):void
// {
//     $class->showName();
//     echo $class->getDocument();
// }

// getName($nexxt);

