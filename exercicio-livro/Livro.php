<?php

require_once 'Publicacao.php';

class Livro implements Publicacao
{
    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $autor;

    /**
     * @var integer
     */
    private $totalDePaginas;

    /**
     * @var integer
     */
    private $paginaAtual;

    /**
     * @var string
     */
    private $aberto;

    /**
     * @var Pessoa
     */
    private $leitor;


    public function detalhes()
    {
        echo 'Livro ' . $this->titulo . ' Escrito por ' . $this->autor .PHP_EOL;
        echo 'Pagina ' . $this->totalDePaginas . ' Pagina atual ' . $this->paginaAtual . PHP_EOL;
        echo 'Sendo Lido por ' . $this->leitor->getNome() . PHP_EOL;
    }

    /**
     * @param string $titulo
     * @param string $autor
     * @param int $totalDePaginas
     * @param Pessoa $leitor
     */
    public function __construct(string $titulo, string $autor, int $totalDePaginas, Pessoa $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalDePaginas = $totalDePaginas;
        $this->leitor = $leitor;
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
     * @return string
     */
    public function getAutor(): string
    {
        return $this->autor;
    }

    /**
     * @param string $autor
     */
    public function setAutor(string $autor): void
    {
        $this->autor = $autor;
    }

    /**
     * @return int
     */
    public function getTotalDePaginas(): int
    {
        return $this->totalDePaginas;
    }

    /**
     * @param int $totalDePaginas
     */
    public function setTotalDePaginas(int $totalDePaginas): void
    {
        $this->totalDePaginas = $totalDePaginas;
    }

    /**
     * @return int
     */
    public function getPaginaAtual(): int
    {
        return $this->paginaAtual;
    }

    /**
     * @param int $paginaAtual
     */
    public function setPaginaAtual(int $paginaAtual): void
    {
        $this->paginaAtual = $paginaAtual;
    }

    /**
     * @return string
     */
    public function getAberto(): string
    {
        return $this->aberto;
    }

    /**
     * @param string $aberto
     */
    public function setAberto(string $aberto): void
    {
        $this->aberto = $aberto;
    }

    /**
     * @return string
     */
    public function getLeitor(): string
    {
        return $this->leitor;
    }

    /**
     * @param string $leitor
     */
    public function setLeitor(string $leitor): void
    {
        $this->leitor = $leitor;
    }


    public function abrir()
    {
        $this->aberto = true;
    }

    public function fechar()
    {

    }

    public function folhear(int $pagina)
    {
        if($pagina > $this->totalDePaginas){
            $this->paginaAtual = 0;
        } else {
            $this->paginaAtual = $pagina;
        }
    }

    public function avancarPag()
    {
        $this->paginaAtual ++;
    }

    public function voltarPag()
    {
        $this->paginaAtual--;
    }
}