<?php

require_once 'Animal.php';

class Reptil extends Animal
{
    /**
     * @var string
     */
    private $corEscama;

    /**
     * @return string
     */
    public function getCorEscama(): string
    {
        return $this->corEscama;
    }

    /**
     * @param string $corEscama
     */
    public function setCorEscama(string $corEscama): void
    {
        $this->corEscama = $corEscama;
    }

    public function locomover()
    {
        echo 'Nadando ' .PHP_EOL;
    }

    public function alimentar()
    {
        echo 'Comendo substancias ' .PHP_EOL;
    }

    public function emitirSom()
    {
        echo 'Peixe nao faz sons ' .PHP_EOL;
    }

    public function soltarBolhas()
    {
        echo 'Soltou uma bolha ' .PHP_EOL;
    }
}