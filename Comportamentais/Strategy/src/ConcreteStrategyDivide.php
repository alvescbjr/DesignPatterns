<?php

namespace DesignPattern\Strategy;

use DesignPattern\Strategy\Strategy;

class ConcreteStrategyDivide implements Strategy
{
    public function execute(int $a, int $b): float
    {
        return $a / $b;
    }
}