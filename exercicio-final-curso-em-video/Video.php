<?php
require_once 'AcoesVideo.php';

class Video implements AcoesVideo
{
    /**
     * @var string
     */
    private $titulo;

    /**
     * @var integer
     */
    private $avaliacoes;

    /**
     * @var integer
     */
    private $views;

    /**
     * @var integer
     */
    private $curtidas;

    /**
     * @var integer
     */
    private $reproduzindo;

    /**
     * @param string $titulo
     */
    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
        $this->avaliacoes = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @param string $titulo
     */
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return int
     */
    public function getAvaliacoes(): int
    {
        return $this->avaliacoes;
    }

    /**
     * @param int $avaliacoes
     */
    public function setAvaliacoes(int $avaliacoes): void
    {
        $media = 0;
        $media = ($this->avaliacoes + $avaliacoes) / 2;
        $this->avaliacoes = $avaliacoes;
    }

    /**
     * @return int
     */
    public function getViews(): int
    {
        return $this->views;
    }

    /**
     * @param int $views
     */
    public function setViews(int $views): void
    {
        $this->views = $views;
    }

    /**
     * @return int
     */
    public function getCurtidas(): int
    {
        return $this->curtidas;
    }

    /**
     * @param int $curtidas
     */
    public function setCurtidas(int $curtidas): void
    {
        $this->curtidas = $curtidas;
    }

    /**
     * @return int
     */
    public function getReproduzindo(): int
    {
        return $this->reproduzindo;
    }

    /**
     * @param int $reproduzindo
     */
    public function setReproduzindo(int $reproduzindo): void
    {
        $this->reproduzindo = $reproduzindo;
    }



    public function play()
    {
        $this->reproduzindo = true;
    }

    public function pause()
    {
        $this->reproduzindo = false;
    }

    public function like()
    {
        $this->curtidas ++;
    }
}