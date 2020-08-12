<?php


use Alura\DesignPattern\CalculadoraDeDesconto;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\ICMS;
use Alura\DesignPattern\Impostos\ISS;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeDesconto();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItnes = 5;

echo $calculadora->calculaDesconto($orcamento). PHP_EOL;