<?php

require '../vendor/autoload.php';

use Daniel\CursoPooPhp\Faculdade\Cartao\Banco;
use Daniel\CursoPooPhp\Faculdade\Cartao\CartaoDeCredito;
use Daniel\CursoPooPhp\Faculdade\Cartao\Cliente;
use Daniel\CursoPooPhp\Faculdade\Cartao\Produto;

$produto1 = new Produto('COD010', 'iTray', 7800.99);
$produto2 = new Produto('COD002', 'Tray Watch', 3499.99);
$produto3 = new Produto('COD003', 'iMac Tray Edition', 12980.99);

$produto4 = new Produto('COD982', 'Chaveiro PHP', 39.40);
$produto5 = new Produto('COD907', 'Cobertor PHP', 1566.10);

$arrayDeProdutos = [$produto1, $produto2, $produto3];



$daniel =  new Cliente('Daniel', 'daniel@daniel.com', 'Maracai SP', '1833713164');
$nubank =  new Banco('Nubank', 'AV São Paulo 1002, São Paulo', '11325689' , 'Cesar Menotti');
$cartao =  new CartaoDeCredito($nubank,$daniel, 'mastercard', 20000, '05-12-2023', $arrayDeProdutos);

$cartao->setLimite(30000);

dump( $cartao->getLimite(), $cartao->getTotal());

dump($cartao->comprar());

dump($cartao->getLimite());


dump ($cartao->getExtrato());

echo ($cartao->getExtratoHtml());

echo "<hr>";

$cartao->setCompras([$produto4]);

dump( $cartao->getLimite(), $cartao->getTotal());

dump($cartao->comprar());

dump($cartao->getLimite());

dump ($cartao->getExtrato());

echo ($cartao->getExtratoHtml());

// dump( $cartao->getTotal());

$cartao->setCompras([$produto5]);

dump( $cartao->getLimite(), $cartao->getTotal());

dump($cartao->comprar());

dump($cartao->getLimite());

dump ($cartao->getExtrato());

echo ($cartao->getExtratoHtml());

echo "<hr>";

dump($cartao->getFatura());