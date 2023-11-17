<?php

declare(strict_types=1);

require '../vendor/autoload.php';

echo "Typehinting e Retornos (Primitivo, void e Never)<br><br><br>";

class Person
{
    public function greetings(string $name, int $age, int|float $weight, int|float $height, callable $imc):string|null
    {
        
        $result = "Olá {$name}, voce possúi {$age} de idade e seu peso é {$weight} <br>";
        $result .= imc($height, $weight);

        return $result;
    }
}

function imc(int|float $height, int|float $weight)
{   
    $imcCalculated = $weight / ($height * $height);

    return "O seu IMC está em: {$imcCalculated}";
}



$person = new Person;
echo $person->greetings('Daniel', 18, 54.6, 1.71, 'imc') . PHP_EOL . '<br>';
// echo $person->imc( 1.64, 54.6 ) . PHP_EOL;