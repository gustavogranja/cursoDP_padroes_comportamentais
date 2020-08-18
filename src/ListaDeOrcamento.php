<?php

namespace Alura\DesignPattern;


class ListaDeOrcamento implements \IteratorAggregate
{
    /** @var Orcamento [] */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos [] = $orcamento;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orcamentos);
    }
}