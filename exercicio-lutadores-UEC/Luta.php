<?php

require_once 'Lutador.php';

class Luta
{
    /**
     * @var Lutador
     */
    private $desafiado;

    /**
     * @var Lutador
     */
    private $desafiante;

    /**
     * @var integer
     */
    private $rounds;

    /**
     * @var boolean
     */
    private $aprovada;




    /**
     * @return Lutador
     */
    public function getDesafiado(): Lutador
    {
        return $this->desafiado;
    }

    /**
     * @param Lutador $desafiado
     */
    public function setDesafiado(Lutador $desafiado): void
    {
        $this->desafiado = $desafiado;
    }

    /**
     * @return Lutador
     */
    public function getDesafiante(): Lutador
    {
        return $this->desafiante;
    }

    /**
     * @param Lutador $desafiante
     */
    public function setDesafiante(Lutador $desafiante): void
    {
        $this->desafiante = $desafiante;
    }

    /**
     * @return int
     */
    public function getRounds(): int
    {
        return $this->rounds;
    }

    /**
     * @param int $rounds
     */
    public function setRounds(int $rounds): void
    {
        $this->rounds = $rounds;
    }

    /**
     * @return bool
     */
    public function isAprovada(): bool
    {
        return $this->aprovada;
    }

    /**
     * @param bool $aprovada
     */
    public function setAprovada(bool $aprovada): void
    {
        $this->aprovada = $aprovada;
    }


    public function marcarLuta(Lutador $lutador1, Lutador $lutador2)
    {
        if($lutador1->getCategoria() === $lutador2->getCategoria() && $lutador1 !== $lutador2){
            $this->setAprovada(true);
            $this->setDesafiado($lutador1);
            $this->setDesafiante($lutador2);
        } else{
            $this->setAprovada(false);
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }


    public function lutar()
    {
        if($this->isAprovada()){
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0,2);

            switch ($vencedor) {
                case 0:
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    echo 'Empatou ' . PHP_EOL;
                    break;
                case 1:
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    echo 'Ganhou Desafiado ' . $this->getDesafiado()->getNome() . PHP_EOL;
                    break;
                case 2:
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                    echo 'Ganhou Desafiante ' . $this->getDesafiante()->getNome() . PHP_EOL;
                    break;
            }
        } else {
            echo 'Luta nao pode acontecer ' .PHP_EOL;
        }

    }
}