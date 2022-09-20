<?php
require_once 'ControleRemoto.php';

$c1 = new ControleRemoto();

$c1->ligar();
$c1->abrirMenu();

var_dump($c1);