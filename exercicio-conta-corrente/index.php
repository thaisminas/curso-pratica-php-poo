<?php
require('ContaBancaria.php');

$conta1 = new ContaBancaria();
$conta2 = new ContaBancaria();

$conta1->abrirConta('CC', 'Thais');
$conta2->abrirConta('CP', 'Daniel');

$conta2->sacar(150);
$conta2->depositar(500);
$conta2->pagarMensal();
$conta2->fecharConta();


$conta1->sacar(50);
$conta1->fecharConta();
$conta1->depositar(30);

print_r($conta1);
var_dump($conta1);