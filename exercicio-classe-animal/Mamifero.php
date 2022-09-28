<?php

require_once 'Animal.php';

class Mamifero extends Animal
{

    /**
     * @var string
     */
    private $corDoPelo;

    /**
     * @return string
     */
    public function getCorDoPelo(): string
    {
        return $this->corDoPelo;
    }

    /**
     * @param string $corDoPelo
     */
    public function setCorDoPelo(string $corDoPelo): void
    {
        $this->corDoPelo = $corDoPelo;
    }

    public function locomover()
    {
        echo 'Correndo ' .PHP_EOL;
    }

    public function alimentar()
    {
        echo 'Mamando ' .PHP_EOL;
    }

    public function emitirSom()
    {
        echo 'Som de Mamifero ' .PHP_EOL;
    }
}