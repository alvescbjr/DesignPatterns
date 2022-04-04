<?php

namespace DesignPattern\TemplateMethod;

use DesignPattern\TemplateMethod\Game;

class Criquete extends Game
{
    public function inicializar() : void
    {
        print "Jogo de críquete inicializado! Começa a jogar." . PHP_EOL;
    }

    public function comecarAJogar() : void
    {
        print "Jogo de críquete iniciado. Aproveite o jogo!" . PHP_EOL;
    }

    public function fimDeJogo() : void
    {
        print "Jogo de críquete finalizado!" . PHP_EOL;
    }
}