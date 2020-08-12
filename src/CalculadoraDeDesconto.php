<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\Desconto;
use Alura\DesignPattern\Descontos\DescontoMaisDe500Reis;
use Alura\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDesconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(new DescontoMaisDe500Reis(
            new SemDesconto()
        ));
        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}