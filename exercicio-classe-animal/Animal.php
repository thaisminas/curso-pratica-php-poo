<?php

abstract class Animal
{
    /**
     * @var float
     */
    private $peso;

    /**
     * @var integer
     */
    private $idade;

    /**
     * @var string
     */
    private $membros;

    /**
     * @return float
     */
    public function getPeso(): float
    {
        return $this->peso;
    }

    /**
     * @param float $peso
     */
    public function setPeso(float $peso): void
    {
        $this->peso = $peso;
    }

    /**
     * @return int
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * @param int $idade
     */
    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    /**
     * @return string
     */
    public function getMembros(): string
    {
        return $this->membros;
    }

    /**
     * @param string $membros
     */
    public function setMembros(string $membros): void
    {
        $this->membros = $membros;
    }



    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();

}