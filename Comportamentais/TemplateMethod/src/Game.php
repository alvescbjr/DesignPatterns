<?php

namespace DesignPattern\TemplateMethod;

abstract class Game
{
    public abstract function inicializar()      : void;
    public abstract function comecarAJogar()    : void;
    public abstract function fimDeJogo()        : void;

    //template method
    public final function play() : void
    {
        $this->inicializar();
        $this->comecarAJogar();
        $this->fimDeJogo();
    }
}