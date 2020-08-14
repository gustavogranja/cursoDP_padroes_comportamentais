<?php


namespace Alura\DesignPattern;


use Alura\DesignPattern\EstadosOrcamento\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
    public  int $quantidadeItnes;
    public float $valor;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

    public function asplicaDescontoExtra()
    {
       $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova(Orcamento $orcamento)
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova(Orcamento $orcamento)
    {
        $this->estadoAtual->reprova($this);
    }

    public function finalizar(Orcamento $orcamento)
    {
        $this->estadoAtual->finalizar($this);
    }

}