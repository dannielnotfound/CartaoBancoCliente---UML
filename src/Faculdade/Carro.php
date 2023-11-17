<?php

declare(strict_types=1);

namespace Daniel\CursoPooPhp;

class Carro
{
    private string $marca;
    private string $modelo;
    private float $capacidadeTanque;  
    private float $quilometroPorLitro;
    // private float $precoCombustivel;

    public function __construct(
        string $marca,
        string $modelo,
        float $capacidadeTanque,
        float $quilometroPorLitro
    )
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setCapacidadeTanque($capacidadeTanque);
        $this->setQuilometroPorLitro($quilometroPorLitro);
    }

    public function setMarca(string $marca):void
    {
        if(empty($marca)){
            $this->marca = 'Marca';
        }else{
            $this->marca = $marca;
        }
 
    }
    public function setModelo(string $modelo):void
    {
        if(empty($modelo)){
            $this->modelo = 'Modelo';
        }else{
            $this->modelo = $modelo;
        }
    }
    public function setCapacidadeTanque(float $capacidadeTanque):void
    {
        if($capacidadeTanque < 0){
            $this->capacidadeTanque = 1;
        }else{
            $this->capacidadeTanque = $capacidadeTanque;
        }
    }
    public function setQuilometroPorLitro(float $quilometroPorLitro):void
    {
        if($quilometroPorLitro < 0){
            $this->quilometroPorLitro = 1;
        }else{
            $this->quilometroPorLitro = $quilometroPorLitro;
        }
    }
    

    public function getMarca():string
    {
        return $this->marca;
    }
    public function getModelo():string
    {
        return $this->modelo;
    }
    public function getCapacidadeTanque():float
    {
        return $this->capacidadeTanque;
    }
    public function getQuilometroPorLitro():float
    {
        return $this->quilometroPorLitro;
    }

    public function abastecer(float $precoCombustivel):float
    {   
        return $precoCombustivel * $this->capacidadeTanque;       
    }

    public function autonomia():float
    {
        return $this->capacidadeTanque * $this->quilometroPorLitro;
    }
}