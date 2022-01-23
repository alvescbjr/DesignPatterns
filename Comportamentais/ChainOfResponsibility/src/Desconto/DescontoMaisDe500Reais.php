<?php

namespace DesignPattern\ChainOfResponsibility\Desconto;

use DesignPattern\ChainOfResponsibility\Orcamento;
use DesignPattern\ChainOfResponsibility\Desconto\Desconto;

class DescontoMaisDe500Reais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento) : float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}