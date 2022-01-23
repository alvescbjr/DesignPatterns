<?php

namespace DesignPattern\ChainOfResponsibility\Desconto;

use DesignPattern\ChainOfResponsibility\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calculaDesconto(Orcamento $orcamento) : float;
}