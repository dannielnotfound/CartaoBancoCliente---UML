<?php

/*

Considerar um cenário onde o foco da classe aluno é para realizar uma chamada.
Assim a classe aluno deve ter atríbutos que possam identificar cada aluno e qual cursto e disciplinas o aluno cursa.
Além disso deve ter um atríbuto $presente, que define se o aluno esteve em aula(1) ou faltou(0).

Crie a classe, depois crie 5 instâncias baseadas na classe Aluno.
Coloque as 5 instâncias em um array, seu papel é contar o total de aluno presentes e o total de faltantes.
Depois faça uma listagem na tela mostrando o nome de cada aluno e na frente se esteve em aula ou faltou.

*/

class Aluno
{
    public $nome;
    public $ra;
    public $disciplina;
    public $termo;
    public $presenca;

    public function __construct(
        string  $nome,
        int     $ra,
        string  $disciplina,
        int     $termo,
        bool    $presenca
    )
    {
        $this->nome         = $nome;
        $this->ra           = $ra;
        $this->disciplina   = $disciplina;
        $this->termo        = $termo;
        $this->presenca     = $presenca;
    }

    public function isStudentPresent()
    {
        if($this->presenca)
            return true;
        
        return False;
    }
}

$daniel = new Aluno('Daniel', 172, 'ADS', 2, True);

$lucas = new Aluno('Lucas', 161, 'ADS', 2, False);

$douglas = new Aluno('Douglas', 73, 'ADS', 2, False);

$jenifer = new Aluno('Jenifer', 289, 'ADS', 2, True);

$eduardo = new Aluno('Eduardo', 172, 'ADS', 2, True);


$alunos = [
    $daniel,
    $lucas,
    $douglas,
    $jenifer,
    $eduardo
];

var_dump($alunos);

echo "<br>";
echo "<hr>";

$alunos_presentes = Array();
$alunos_ausentes = Array();

foreach ($alunos as $aluno) {
    if($aluno->isStudentPresent()){
        array_push($alunos_presentes, $aluno->nome);
    }else{
        array_push($alunos_ausentes, $aluno->nome);
    }
}

?>

<h1>Alunos presentes</h1>
<ul>
    <?php
        foreach ($alunos_presentes as $aluno) {
            ?>
            <li><?php echo $aluno; ?>: <strong>presente</strong></li>
        <?php
        }
    ?>
    <li>Total: <?php echo count($alunos_presentes) ?></li>
</ul>

<h1>Alunos ausentes</h1>
<ul>
    <?php
        foreach ($alunos_ausentes as $aluno) {
            ?>
            <li><?php echo $aluno; ?>: <strong>ausente</strong></li>
        <?php
        }
    ?>
    <li>Total: <?php echo count($alunos_ausentes) ?></li>
</ul>