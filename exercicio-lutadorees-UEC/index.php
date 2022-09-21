<?php

require_once 'Lutador.php';

$lutadores = array();

$lutadores[0] = new Lutador('Pretty Boy', 'Franca', 31, 1.75, 68.9, 11, 2, 1);
$lutadores[1] = new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3);
$lutadores[2] = new Lutador('SnapShadow', 'EUA', 35, 1.65, 80.8,12, 2, 1);
$lutadores[3] = new Lutador('Dead Code', 'Australia', 28, 1.93, 81.6,13, 0, 2);
$lutadores[4] = new Lutador('UFC Cobol', 'Brasil', 37, 1.70, 119.3,5, 4, 3);
$lutadores[5] = new Lutador('Nerdart', 'EUA', 30, 1.81, 105.7, 12, 2, 4);


$lutadores[3]->status();