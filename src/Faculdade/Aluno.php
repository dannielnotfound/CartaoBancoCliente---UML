<?php

declare(strict_types=1);

namespace Daniel\CursoPooPhp;

class Aluno
{
    private string $nome;
    private int $ra;
    private string $curso;
    private string $disciplina;
    private float $notaP1;
    private float $notaP2;

    public function __construct(
        string $nome,
        int $ra,
        string $disciplina
    )
    {
        $this->setNome($nome);
        $this->setRa($ra);
        $this->setDisciplina($disciplina);
    }

    public function setNome(string $nome):void
    {
        if(empty($nome)){
            $this->nome = 'Nome';
        }else{
            $this->nome = $nome;
        }
    }

    public function setRa(int $ra):void
    {
        if($ra < 0){
            $this->ra = 0;
        }else{
            $this->ra = $ra;
        }
    }

    public function setDisciplina(string $disciplina):void
    {
        if(empty($disciplina)){
            $this->disciplina = 'Disciplina';
        }else{
            $this->disciplina = $disciplina;
        }
    }

    public function setCurso(string $curso):void
    {
        if(empty($curso)){
            $this->curso = $curso;
        }else{
            $this->curso = $curso;
        }
    }

    public function setNotaP1(float $notaP1):void
    {
        if($notaP1 < 0 )
        {
            $this->notaP1 = 0;
        }else{
            $this->notaP1 = $notaP1;
        }
    }

    public function setNotaP2(float $notaP2):void
    {
        if($notaP2 < 0 ){
            $this->notaP2 = 0;
        }else{
            $this->notaP2 = $notaP2;
        }
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function getRa():int
    {
        return $this->ra;
    }

    public function getDisciplina():string
    {
        return $this->disciplina;
    }

    public function getCurso():string
    {
        return $this->curso;
    }

    public function getNotaP1():float
    {
        return $this->notaP1;
    }

    public function getNotaP2():float
    {
        return $this->notaP2;
    }

    public function calcularMedia():array|string
    {   
        if(empty($this->notaP1) || $this->notaP1 === null || empty($this->notaP2) || $this->notaP2 === null)
        {
            return ["Erro", "Voce precisa preencher as notas corretamente com valores Float."];
        }

        $media =  ($this->notaP1 + $this->notaP2) / 2;
        
        $conditions = ['aprovado', 'exame', 'reprovado'];

        switch ($media) {
            case $media >= 7:
                $condition = $conditions[0];
                break;
            case $media >= 5:
                $condition = $conditions[1];
                break;
            case $media < 5:
                $condition = $conditions[2];
                break;
            default:
                break;
        }
        return ["media" => $media, "condicao" => $condition];
    }
}