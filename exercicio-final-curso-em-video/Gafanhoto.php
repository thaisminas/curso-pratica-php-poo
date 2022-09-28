<?php
require_once 'Pessoa.php';

class Gafanhoto extends PessoaCursoEmVideo
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var integer
     */
    private $totalAssistido;

    /**
     * @param string $login
     * @param int $totalAssistido
     */
    public function __construct(string $nome, int $idade, string $sexo, string $login)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totalAssistido = 0;
    }


    public function viuMaisUm()
    {
        $this->totalAssistido ++;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**
     * @return int
     */
    public function getTotalAssistido(): int
    {
        return $this->totalAssistido;
    }

    /**
     * @param int $totalAssistido
     */
    public function setTotalAssistido(int $totalAssistido): void
    {
        $this->totalAssistido = $totalAssistido;
    }


}