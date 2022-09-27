<?php
require_once 'PessoaEscola.php';

class Aluno extends PessoaEscola
{
    /**
     * @var integer
     */
    private $matricula;

    /**
     * @var string
     */
    private $curso;

    public function cancelarMatricula()
    {
        echo 'A matricula N ' . $this->getMatricula() . ' Foi cancelada';
    }

    public function pagarMensalidade()
    {
        echo 'Pagando Mensalidade do Aluno ' . $this->getNome() . PHP_EOL;
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula): void
    {
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * @param mixed $curso
     */
    public function setCurso($curso): void
    {
        $this->curso = $curso;
    }



}