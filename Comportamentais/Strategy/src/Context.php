<?php

namespace DesignPattern\Strategy;

use DesignPattern\Strategy\Strategy;

// O contexto define a interface de interesse para clientes.
class Context
{
    // O contexto mantém uma referência para um dos objetos
    // estratégia. O contexto não sabe a classe concreta de uma
    // estratégia. Ele deve trabalhar com todas as estratégias
    // através da interface estratégia.
    private Strategy $strategy;

    // Geralmente o contexto aceita uma estratégia através do
    // construtor, e também fornece um setter para que a
    // estratégia possa ser trocado durante o tempo de execução.
    public function setStrategy(Strategy $strategy) : void
    {
        $this->strategy = $strategy;
    }

    // O contexto delega algum trabalho para o objeto estratégia
    // ao invés de implementar múltiplas versões do algoritmo
    // por conta própria.
    public function executeStrategy(int $a, int $b) : float
    {
        return $this->strategy->execute($a, $b);
    }
}