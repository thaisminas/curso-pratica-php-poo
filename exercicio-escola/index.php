<?php

require_once 'PessoaEscola.php';
require_once 'Aluno.php';
require_once 'Professor.php';
require_once 'Funcionario.php';
require_once 'Visitante.php';
require_once 'Bolsista.php';

$pessoa1 = new Aluno();
$pessoa2 = new Professor();
$pessoa3 = new Funcionario();
$visitante1 = new Visitante();


$pessoa1->setNome("Thais");
$pessoa1->setMatricula(123);
$pessoa1->setIdade(28);
$pessoa1->setCurso("Ciencia da computacao");
$pessoa1->pagarMensalidade();

$pessoa1->fazerAniversario();


$pessoa2->setNome('Fabiana');
$pessoa2->setSalario(340.00);
$pessoa2->receberAumento(30);


$visitante1->setNome('Teste');


$alunoBolsista = new Bolsista();
$alunoBolsista->setNome('Florentina');
$alunoBolsista->pagarMensalidade();
$alunoBolsista->renovarBolsa();
print_r($alunoBolsista);

