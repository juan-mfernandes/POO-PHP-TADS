<?php

require_once("./models/Aluno.php");
require_once("./models/Turma.php");
require_once("./models/Curso.php");

$curso1 = new Curso("TADS", 18);

$aluno2 = new Aluno("Mateus", 17);
$aluno3 = new Aluno("Johnny", 19);
$aluno4 = new Aluno("Erik", 18);

$turma1 = new Turma(1, $curso1);
$turma1->matricularAluno($aluno2);
$turma1->matricularAluno($aluno3);
$turma1->matricularAluno($aluno4);

foreach ($turma1->getAlunos() as $aluno) {
    echo "\n\n" . "Nome do aluno: " . 
    $aluno->getNome() . 
    "\n" . "Idade: " . 
    $aluno->getIdade() . 
    " anos" . "\n" . 
    "Status: " . 
    $aluno->getStatus() . "\n";
}
