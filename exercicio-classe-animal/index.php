<?php
require_once 'Mamifero.php';

$vaca = new Mamifero();

$vaca->setPeso(85.3);
$vaca->setIdade(2);
$vaca->setMembros(4);
$vaca->alimentar();
$vaca->emitirSom();

print_r($vaca);