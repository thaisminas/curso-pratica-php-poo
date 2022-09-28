<?php
require_once 'Animal.php';

class Ave extends Animal
{
    /**
     * @var string
     */
    private $corDaPena;

    /**
     * @return string
     */
    public function getCorDaPena(): string
    {
        return $this->corDaPena;
    }

    /**
     * @param string $corDaPena
     */
    public function setCorDaPena(string $corDaPena): void
    {
        $this->corDaPena = $corDaPena;
    }

    public function locomover()
    {
        echo 'Voando ' .PHP_EOL;
    }

    public function alimentar()
    {
        echo 'Comendo frutas ' .PHP_EOL;
    }

    public function emitirSom()
    {
        echo 'Som de Ave ' .PHP_EOL;
    }

    public function fazerNinho()
    {
        echo 'Construiu Ninho ' .PHP_EOL;
    }
}