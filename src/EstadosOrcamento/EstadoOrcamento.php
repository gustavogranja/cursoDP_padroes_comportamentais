<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;
use DomainException;

abstract class EstadoOrcamento
{
    /**
     * @param Orcamento $orcamento
     * @return float
     */
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento no pode ser aprovado');
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento no pode ser reprovado');
    }

    public function finalizar(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento no pode ser finalizado');
    }
}