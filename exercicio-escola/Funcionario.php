<?php
require_once 'PessoaEscola.php';

class Funcionario extends PessoaEscola
{
    /**
     * @var string
     */
    private $setor;

    /**
     * @var boolean
     */
    private $trabalhando;

    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }

    /**
     * @return string
     */
    public function getSetor(): string
    {
        return $this->setor;
    }

    /**
     * @param string $setor
     */
    public function setSetor(string $setor): void
    {
        $this->setor = $setor;
    }

    /**
     * @return bool
     */
    public function isTrabalhando(): bool
    {
        return $this->trabalhando;
    }

    /**
     * @param bool $trabalhando
     */
    public function setTrabalhando(bool $trabalhando): void
    {
        $this->trabalhando = $trabalhando;
    }



}