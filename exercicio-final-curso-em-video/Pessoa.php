<?php

abstract class PessoaCursoEmVideo
{
    /**
     * @var string
     */
    private $pessoa;

    /**
     * @var integer
     */
    private $idade;

    /**
     * @var string
     */
    private $sexo;


    /**
     * @var string
     */
    private $experiencia;

    /**
     * @return string
     */
    public function getPessoa(): string
    {
        return $this->pessoa;
    }

    /**
     * @param string $pessoa
     */
    public function setPessoa(string $pessoa): void
    {
        $this->pessoa = $pessoa;
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

    /**
     * @return string
     */
    public function getExperiencia(): string
    {
        return $this->experiencia;
    }

    /**
     * @param string $experiencia
     */
    public function setExperiencia(string $experiencia): void
    {
        $this->experiencia = $experiencia;
    }

    public function ganharExperiencia($n)
    {
        $this->experiencia += $n;
    }
}