<?php


namespace Alura\DesignPattern\EstadosOrcamento;


use Alura\DesignPattern\Orcamento;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Orçamentos finalizados não podem receber desconto ');
    }

    public function finalizar(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}