<?php

namespace DesignPattern\State\exemplo1;

use DesignPattern\State\exemplo1\Contexto;

interface Estado
{
    public function fazerAcao(Contexto $contexto) : void;
}