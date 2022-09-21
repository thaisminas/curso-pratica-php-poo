<?php

class Lutador
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $nacionalidade;

    /**
     * @var integer
     */
    private $idade;

    /**
     * @var float
     */
    private $altura;

    /**
     * @var float
     */
    private $peso;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var integer
     */
    private $vitorias;

    /**
     * @var integer
     */
    private $derrotas;

    /**
     * @var integer
     */
    private $empates;

    /**
     * @param string $nome
     * @param string $nacionalidade
     * @param int $idade
     * @param float $altura
     * @param float $peso
     * @param string $categoria
     * @param int $vitorias
     * @param int $derrotas
     * @param int $empates
     */
    public function __construct(string $nome, string $nacionalidade, int $idade, float $altura, float $peso, int $vitorias, int $derrotas, int $empates)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
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
     * @return string
     */
    public function getNacionalidade(): string
    {
        return $this->nacionalidade;
    }

    /**
     * @param string $nacionalidade
     */
    public function setNacionalidade(string $nacionalidade): void
    {
        $this->nacionalidade = $nacionalidade;
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
     * @return float
     */
    public function getAltura(): float
    {
        return $this->altura;
    }

    /**
     * @param float $altura
     */
    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
    }

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
        $this->setCategoria();
    }

    /**
     * @return string
     */
    public function getCategoria(): string
    {
        return $this->categoria;
    }

    /**
     * @param string $categoria
     */
    private function setCategoria(): void
    {
        if($this->peso < 52.2){
            $this->categoria = 'Invalido';
        } elseif ($this->peso <= 70.3){
            $this->categoria = 'Leve';
        } elseif ($this->peso <= 83.9){
            $this->categoria = 'Medio';
        } elseif ($this->peso <= 120.2){
            $this->categoria = 'Pesado';
        } else {
            $this->categoria = 'Invalido';
        }
    }

    /**
     * @return int
     */
    public function getVitorias(): int
    {
        return $this->vitorias;
    }

    /**
     * @param int $vitorias
     */
    public function setVitorias(int $vitorias): void
    {
        $this->vitorias = $vitorias;
    }

    /**
     * @return int
     */
    public function getDerrotas(): int
    {
        return $this->derrotas;
    }

    /**
     * @param int $derrotas
     */
    public function setDerrotas(int $derrotas): void
    {
        $this->derrotas = $derrotas;
    }

    /**
     * @return int
     */
    public function getEmpates(): int
    {
        return $this->empates;
    }

    /**
     * @param int $empates
     */
    public function setEmpates(int $empates): void
    {
        $this->empates = $empates;
    }



    public function apresentar()
    {
        echo 'Lutador: ' . $this->getNome() .PHP_EOL;
        echo 'Origem: ' . $this->getNacionalidade() .PHP_EOL;
        echo 'Altura: ' . $this->getAltura() .PHP_EOL;
        echo 'Idade: ' . $this->getIdade() .PHP_EOL;
        echo 'Pesando: ' . $this->getPeso() .PHP_EOL;
        echo 'Ganhou: ' . $this->getVitorias() .PHP_EOL;
        echo 'Perdeu: ' . $this->getDerrotas() .PHP_EOL;
        echo 'Empatou: ' . $this->getEmpates() .PHP_EOL;
    }

    public function status()
    {
        echo $this->getNome() .PHP_EOL;
        echo 'e um peso, ' . $this->getCategoria() .PHP_EOL;
        echo $this->getVitorias() . ' vitorias ' .PHP_EOL;
        echo $this->getDerrotas() . ' derrotas ' .PHP_EOL;
        echo $this->getEmpates() . ' empates ' .PHP_EOL;
    }

    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

}