<?php

use Alura\DesignPattern\ListaDeOrcamento;
use Alura\DesignPattern\Orcamento;

require_once 'vendor/autoload.php';


$orcamento1 = new Orcamento();
$orcamento1->quantidadeItnes = 7;
$orcamento1->aprova();
$orcamento1->valor = 1500.75;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItnes = 3;
$orcamento2->reprova();
$orcamento2->valor = 150;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItnes = 5;
$orcamento3->finalizar();
$orcamento3->valor = 1350;

$listaOrcamentos = new ListaDeOrcamento();
$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);

foreach ($listaOrcamentos as $orcamento) {
    echo "Valor: " . $orcamento->valor . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo "Qtd. Itens: " . $orcamento->quantidadeItnes . PHP_EOL;
}