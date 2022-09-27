<?php
require_once 'Aluno.php';

class Bolsista extends Aluno
{
    /**
     * @var string
     */
    private $bolsa;

    public function renovarBolsa()
    {
        echo 'Bolsa renovada para o aluno ' . $this->getNome() .  PHP_EOL;
    }

    public function pagarMensalidade()
    {
        echo 'Pagando mensalidade para o aluno bolsista ' . $this->getNome() .  PHP_EOL;
    }

    /**
     * @return string
     */
    public function getBolsa(): string
    {
        return $this->bolsa;
    }

    /**
     * @param string $bolsa
     */
    public function setBolsa(string $bolsa): void
    {
        $this->bolsa = $bolsa;
    }


}