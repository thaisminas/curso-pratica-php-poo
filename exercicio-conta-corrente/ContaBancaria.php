<?php

class ContaBancaria
{
    /**
     * @var integer
     */
    public $numeroConta;

    /**
     * @var string
     */
    protected $tipo;

    /**
     * @var string
     */
    private $cliente;

    /**
     * @var float
     */
    private $saldo;

    /**
     * @var boolean
     */
    private $status;

    public function __construct()
    {
        $this->saldo = 0;
        $this->status = false;
    }


    public function getNumeroConta(): int
    {
        return $this->numeroConta;
    }

    public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }
    
    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getCliente(): string
    {
        return $this->cliente;
    }

    public function setCliente(string $cliente): void
    {
        $this->cliente = $cliente;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }

    public function isStatus(): bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }


    public function abrirConta($tipo, $cliente)
    {
        $this->setTipo($tipo);
        $this->setCliente($cliente);
        $this->setStatus(true);

        if($tipo === 'CC'){
            $this->setSaldo(50.00);
        }
        if($tipo === 'CP'){
            $this->setSaldo(150.00);
        }

        $numeroConta = mt_rand(1, 7);

        $this->setNumeroConta($numeroConta);

        return [
            "cliente" => $this->getCliente(),
            "tipo" => $this->getTipo(),
            "saldo" => $this->getSaldo(),
            "numeroDaConta" => $this->getNumeroConta(),
            "status" => $this->isStatus(),
        ];

    }


    public function fecharConta(){
        if(0 == $this->getSaldo()){
            $this->setStatus(false);
            return 'Conta Inativada com sucesso ';
        }

        if($this->getSaldo()  > 0 || $this->getSaldo()  < 0 ){
            return 'Ops.. Nao e possivel finalizar sua conta, voce tem um saldo de R$ ' . $this->getSaldo();
        }
    }

    public function depositar($valorDeposito){
            if($this->isStatus()){
                $this->setSaldo($this->getSaldo() + $valorDeposito);
                return 'Valor depositado em sua conta e o seu novo saldo e R$ ' . $this->getSaldo();
            }
    }

    public function sacar($valorSacar){
        if($this->isStatus()){
            if($this->getSaldo() >= $valorSacar ){
               $this->setSaldo($this->getSaldo() - $valorSacar);
            }
        }

        if(!$this->isStatus()){
            return 'Voce nao possui saldo suficiente para sacar';
        }
    }

    public function pagarMensal(){
        if($this->getTipo() === "CC"){
            $this->setSaldo($this->getSaldo() + 12.00);
            return 'Mensalidade Descontado no saldo da conta';
        }

        if($this->getTipo() === "CP"){
            $this->setSaldo($this->getSaldo() - 20.00);
            return 'Mensalidade Descontado no saldo da conta';
        }
    }

}
