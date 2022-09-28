<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';
require_once 'Visualizacao.php';

$v[0] = new Video('Aula 1 de POO');

$g[0] = new Gafanhoto('Thais', 28, 'F', 'thais123');

$vis[0] = new Visualizacao($g[0], $v[0]);

print_r($vis);

