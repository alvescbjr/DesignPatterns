<?php

namespace DesignPattern\Strategy;

/**
 * A interface estratégia declara operações comuns a todas as
 * versões suportadas de algum algoritmo. O contexto usa essa
 * interface para chamar o algoritmo definido pelas estratégias
 * concretas.
 */
interface Strategy
{
    public function execute(int $a, int $b) : float;
}