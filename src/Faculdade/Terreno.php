<?php

declare(strict_types=1);

namespace Daniel\CursoPooPhp;


class Terreno
{
    private float $frente;
    private float $lateral;   
    private float $precoMetro;


    public function __construct(
        float $frente,
        float $lateral,
        float $precoMetro
    )
    {
        $this->frente = $frente;
        $this->lateral = $lateral;
        $this->precoMetro = $precoMetro;
    }


    public function setFrente(float $frente)
    {   
        if($frente < 0){
            $this->frente = 0;
        }else{
            $this->frente = $frente;
        }
    }

    public function setLateral(float $lateral):void
    {
        $this->lateral = $lateral;
    }

    public function setPrecoMetro(float $precoMetro):void
    {
        $this->precoMetro = $precoMetro;
    }


    public function getFrente():float
    {
        return $this->frente;
    }

    public function getLateral():float
    {
        return $this->lateral;
    }

    public function getPrecoMetro():float
    {
        return $this->precoMetro;
    }
}