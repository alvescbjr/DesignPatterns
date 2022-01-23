<?php

namespace DesignPattern\ChainOfResponsibility\Desconto;

use DesignPattern\ChainOfResponsibility\Orcamento;
use DesignPattern\ChainOfResponsibility\Desconto\Desconto;

class DescontoMaisDe5Itens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento) : float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}