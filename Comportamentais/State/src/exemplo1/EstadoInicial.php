<?php

namespace DesignPattern\State\exemplo1;

use DesignPattern\State\exemplo1\Estado;
use DesignPattern\State\exemplo1\Contexto;

class EstadoInicial implements Estado
{
    public function fazerAcao(Contexto $contexto): void
    {
        print "O jogador está no estado inicial" . PHP_EOL;
        $contexto->setEstado($this);
    }

    public function __toString() : string
    {
        return  "Estado Inicial" . PHP_EOL;
    }
}