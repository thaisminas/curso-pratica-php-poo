<?php

class Pessoa
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var integer
     */
    private $idade;

    /**
     * @var string
     */
    private $sexo;

    public function fazerAniversario()
    {
        $this->idade ++;
    }

    /**
     * @param string $nome
     * @param int $idade
     * @param string $sexo
     */
    public function __construct(string $nome, int $idade, string $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
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
    public function getSexo(): string
    {
        return $this->sexo;
    }

    /**
     * @param string $sexo
     */
    public function setSexo(string $sexo): void
    {
        $this->sexo = $sexo;
    }

}