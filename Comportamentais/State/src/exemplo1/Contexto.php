<?php

namespace DesignPattern\State\exemplo1;

use DesignPattern\State\exemplo1\Estado;

class Contexto
{
    private Estado $estado;

    public function getEstado() : Estado
    {
        return $this->estado;
    }

    public function setEstado(Estado $estado) : void
    {
        $this->estado = $estado;
    }

}