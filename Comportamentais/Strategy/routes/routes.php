<?php

use DesignPattern\Strategy\{
    ConcreteStrategyAdd,
    ConcreteStrategyDivide,
    ConcreteStrategyMultiply,
    ConcreteStrategySubtract,
};

$routes = [
    'addition'      => ConcreteStrategyAdd::class,
    'subtraction'   => ConcreteStrategySubtract::class,
    'multplication' => ConcreteStrategyMultiply::class,
    'division'      => ConcreteStrategyDivide::class
];

return $routes;