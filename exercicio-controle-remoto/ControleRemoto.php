<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador
{
    /**
     * @var integer
     */
    private $volume;

    /**
     * @var boolean
     */
    private $ligado;

    /**
     * @var boolean
     */
    private $tocando;

    function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }

    public function setVolume(int $volume): void
    {
        $this->volume = $volume;
    }

    public function isLigado(): bool
    {
        return $this->ligado;
    }

    public function setLigado(bool $ligado): void
    {
        $this->ligado = $ligado;
    }

    public function isTocando(): bool
    {
        return $this->tocando;
    }

    public function setTocando(bool $tocando): void
    {
        $this->tocando = $tocando;
    }

    public function ligar()
    {
        $this->setLigado(true);
    }

    public function desligar()
    {
        $this->setLigado(false);
    }

    public function abrirMenu()
    {
        echo "Esta ligado?: " . $this->isLigado() ? "SIM" : "NAO" . PHP_EOL;
        echo "Esta Tocando?: " . $this->isTocando() ? "SIM" : "NAO" . PHP_EOL;
        echo "Volume " . $this->getVolume() . PHP_EOL;

        for($i = 0; $i <= $this->getVolume(); $i+=10){
            echo "|". PHP_EOL;
        }
    }

    public function fecharMenu()
    {
        echo "Fechando Menu ..." . PHP_EOL;
    }

    public function maisVolune()
    {
        if($this->isLigado()){
            $this->setVolume($this->getVolume() + 1);
        }
    }

    public function menosVolume()
    {
        if($this->isLigado()){
            $this->setVolume($this->getVolume() - 1);
        }
    }

    public function ligarMudo()
    {
        if($this->isLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }

    public function desligarMudo()
    {
        if($this->isLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
}