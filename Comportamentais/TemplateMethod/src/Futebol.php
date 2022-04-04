<?php

namespace DesignPattern\TemplateMethod;

use DesignPattern\TemplateMethod\Game;

class Futebol extends Game
{
    public function fimDeJogo() : void
    {
        print "Jogo de futebol finalizado!" . PHP_EOL;
    }

    public function inicializar(): void
    {
        print "Jogo de futebol inicializado! Começa a jogar." . PHP_EOL;
    }

    public function comecarAJogar(): void
    {
        print "Jogo de futebol iniciado. Aproveite o jogo!" . PHP_EOL;
    }
}