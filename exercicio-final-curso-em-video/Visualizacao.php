<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao
{
    /**
     * @var Gafanhoto
     */
    private $espectador;

    /**
     * @var Video
     */
    private $filme;

    /**
     * @param string $espectador
     * @param string $filme
     */
    public function __construct(Gafanhoto $espectador, Video $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
    }

    /**
     * @return Gafanhoto|string
     */
    public function getEspectador()
    {
        return $this->espectador;
    }

    /**
     * @param Gafanhoto|string $espectador
     */
    public function setEspectador($espectador): void
    {
        $this->espectador = $espectador;
    }

    /**
     * @return string|Video
     */
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * @param string|Video $filme
     */
    public function setFilme($filme): void
    {
        $this->filme = $filme;
    }

    public function avaliar()
    {
        $this->filme->setAvaliacoes(5);
    }

    public function avaliarNota($nota)
    {
        $this->filme->setAvaliacoes($nota);
    }

    public function avaliarPorc($porc)
    {
        $nova = 0;

        if($porc <= 20){
            $nova = 3;
        } else if ($porc <= 50){
            $nova = 5;
        } else if ($porc <= 90){
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->filme->setAvaliacoes($nova);
    }
}