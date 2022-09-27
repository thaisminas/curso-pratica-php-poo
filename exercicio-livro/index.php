<?php

require_once 'Livro.php';
require_once  'Pessoa.php';


$pessoa = [];
$livro = [];

$pessoa[0] = new Pessoa('Maria', 27, 'F');
$pessoa[1] = new Pessoa('Carla', 50, 'F');
$pessoa[2] = new Pessoa('Joao', 65, 'M');

$livro[0] = new Livro('PHP Basico', 'Carlos', 400, $pessoa[0]);
$livro[1] = new Livro('Javascript iniciante', 'Jaoa Silva', 200, $pessoa[1]);
$livro[2] = new Livro('Estrutura de dados e algoritmos', 'Loiane', 250, $pessoa[2]);

$livro[0]->folhear(80);
$livro[0]->avancarPag();
$livro[0]->voltarPag();
$livro[0]->detalhes();

//print_r($livro);