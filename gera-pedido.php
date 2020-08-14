<?php

use Alura\DesignPattern\GerarPedido;
use Alura\DesignPattern\GerarPedidoHandler;


require 'vendor/autoload.php';

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->execute($gerarPedido);