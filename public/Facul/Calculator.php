<?php

class Calculator
{
    public $operation;
    public $num1;
    public $num2;

    public function __construct(
        float $num1,
        float $num2,
        string $operation = null
    )
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operation = $operation;
    }
    
    public function sum() : float {
        return $this->num1 + $this->num2;
    }
    public function min() : float {
        return $this->num1 - $this->num2;
    }
    public function mult() : float {
        return $this->num1 * $this->num2;
    }
    public function div() : float {
        return $this->num1 / $this->num2;
    }

    public function calculate() : float {
        if($this->operation = 'sum')
        {
            return $this->num1 + $this->num2;
        }

        if($this->operation = 'min')
        {
            return $this->num1 - $this->num2;
        }

        if($this->operation = 'mult')
        {
            return $this->num1 * $this->num2;
        }

        if($this->operation = 'div')
        {
            return $this->num1 / $this->num2;
        }
    }

    public function calculateSwitch() : float {
        switch ($this->operation) {
            case 'sum':
                return $this->num1 + $this->num2;
            case 'min':
                return $this->num1 - $this->num2;
            case 'mult':
                return $this->num1 * $this->num2;
            case 'div':
                return $this->num1 / $this->num2;
            default:
                return 0;
        }
    }
}



$op = new Calculator(2, 2, 'mult');

var_dump($op->sum());
var_dump($op->min());
var_dump($op->mult());
var_dump($op->div());
var_dump($op->calculate());
var_dump($op->calculateSwitch());
