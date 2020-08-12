<?php


namespace Alura\DesignPattern\Descontos;


use Alura\DesignPattern\Orcamento;

class DescontoMaisDe500Reis extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItnes > 500 ) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}