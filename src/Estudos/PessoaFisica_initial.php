<?php
declare(strict_types=1);

namespace Daniel\CursoPooPhp;

class PessoaFisica_
{

    const OBJECT_TYPE = 'Ser humano';

    private static  string  $name   = '';
    private string          $cpf;
    private string          $phone;
    private string          $email;
    private int             $age;

    public function __construct(
        string $name,
        string $cpf,
        string $phone,
        string $email,
        int    $age
    )
    {
        self::$name     =   $name;
        $this->cpf      =   $cpf;
        $this->phone    =   $phone;
        $this->email    =   $email;
        $this->age      =   $age;
    }

    public static function getInformation(string $name): string
    {   
        self::$name = $name;
        return self::$name . ' - ' . self::OBJECT_TYPE;
    }

    public function getName():string
    {
        return self::$name;
    }
    
    public function getCpf():string
    {
        return $this->cpf;
    }

    public function getPhone():string
    {
        return $this->phone;
    }

    public function getEmail():string
    {
        return $this->email;
    }
    
    public function getAge():int
    {
        return $this->age;
    }

    public function getThis():static
    {
        return $this;
    }
}


