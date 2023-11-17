<?php

require '../vendor/autoload.php';

// use Daniel\CursoPooPhp\Empregado;
// use Daniel\CursoPooPhp\Aluno;
use Daniel\CursoPooPhp\Faculdade\Cartao\Cliente;
use Daniel\CursoPooPhp\Faculdade\Cartao\Banco;
use Daniel\CursoPooPhp\Faculdade\Cartao\CartaoDeCredito;
use Daniel\CursoPooPhp\Faculdade\Cartao\Produto;

$produto1 = new Produto('KXU2839', 'iPhone 13 Mini', 3680.9);
$produto2 = new Produto('HJK1908', 'Apple Watch 8', 2690.20);
$produto3 = new Produto('TXKY239', 'Macbook Pro M2', 9280.80);



$compras = [$produto1, $produto2, $produto3]; //Array de valores para passar no cartao

$cliente = new Cliente('Daniel', 'daniel@gmail.com', 'Marilia - AV Esmeraldas', '18 998788690');
$banco   =  new Banco('Banco do Brasil', 'Av. São Paulo, nº 231', '14 33415679', 'Daniel Oliveira');
$cartaoDeCredito   =  new CartaoDeCredito($banco, $cliente, 'Visa', 50000,'01', $compras );

//print_r($cartaoDeCredito->getLimite());


$cartaoDeCredito->comprar();
// print_r($cartaoDeCredito->getLimite());
// @dd($cartaoDeCredito->getLimite());



// $classes = [$cliente, $banco, $cartaoDeCredito];
// dd($classes);
// print_r($cliente);
// print_r($banco);
// print_r($cartaoDeCredito);



