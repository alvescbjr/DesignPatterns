<?php

namespace DesignPattern\State\exemplo1;

class EstadoDeParada implements Estado
{
    public function fazerAcao(Contexto $contexto): void
    {
        print "O jogador está em estado de parada" . PHP_EOL;
        $contexto->setEstado($this);
    }

    public function __toString() : string
    {
        return "Estado de Parada" . PHP_EOL;
    }
}