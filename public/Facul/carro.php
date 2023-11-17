<?php

require '../vendor/autoload.php';

use Daniel\CursoPooPhp\Compra;
use Daniel\CursoPooPhp\Carro;

$carro = new Carro('Chevrolet', 'Monza', 61.234, 4.632);

echo "O seu veículo é um {$carro->getMarca()} {$carro->getModelo()} que possuí um tanque com {$carro->getCapacidadeTanque()} litros de capacidade e faz em média {$carro->getQuilometroPorLitro()} quilometros por litro.";
echo "<br>";
echo "O total para abastecer o tanque de {$carro->getCapacidadeTanque()} litros deste veículo é de R$ {$carro->abastecer(4.879)}. Além disso, a sua autonomia é de {$carro->autonomia()} quilometros por tanque.";
// $compra = new Compra('Daniel', 12.2, 3);

// dd($compra->totalCompra());