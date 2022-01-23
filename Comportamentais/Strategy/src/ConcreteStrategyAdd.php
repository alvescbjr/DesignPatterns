<?php

namespace DesignPattern\Strategy;

use DesignPattern\Strategy\Strategy;

/**
 * Estratégias concretas implementam o algoritmo enquanto seguem
 * a interface estratégia base. A interface faz delas
 * intercomunicáveis no contexto.
 */
class ConcreteStrategyAdd implements Strategy
{
    public function execute(int $a, int $b) : float
    {
        return $a + $b;
    }
}