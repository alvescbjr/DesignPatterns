<?php

namespace DesignPattern\ChainOfResponsibility;

use DesignPattern\ChainOfResponsibility\Desconto\DescontoMaisDe500Reais;
use DesignPattern\ChainOfResponsibility\Desconto\DescontoMaisDe5Itens;
use DesignPattern\ChainOfResponsibility\Desconto\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDesconto(Orcamento $orcamento) : float
    {
        $cadeiaDeDesconto = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDesconto->calculaDesconto($orcamento);
    }
}