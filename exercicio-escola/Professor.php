<?php
require_once 'PessoaEscola.php';
class Professor extends PessoaEscola
{
    /**
     * @var string
     */
    private $especialidade;

    /**
     * @var float
     */
    private $salario;

    public function receberAumento($aumento)
    {
        $this->salario += $aumento;
    }

    /**
     * @return string
     */
    public function getEspecialidade(): string
    {
        return $this->especialidade;
    }

    /**
     * @param string $especialidade
     */
    public function setEspecialidade(string $especialidade): void
    {
        $this->especialidade = $especialidade;
    }

    /**
     * @return float
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     * @param float $salario
     */
    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }


}