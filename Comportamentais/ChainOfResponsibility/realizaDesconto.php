<?php

require_once __DIR__ . "/../vendor/autoload.php";

use DesignPattern\ChainOfResponsibility\Orcamento;
use DesignPattern\ChainOfResponsibility\CalculadoraDeDescontos;

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 300.00;
$orcamento->quantidadeItens = 3;

print $calculadora->calculaDesconto($orcamento);