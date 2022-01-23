<?php

require_once __DIR__ . "/vendor/autoload.php";

use DesignPattern\Strategy\{
    ConcreteStrategyAdd,
    ConcreteStrategyDivide,
    ConcreteStrategyMultiply,
    ConcreteStrategySubtract,
    Context
};

$context = new Context();

$firstNumber = $argv[1];
$secondNumber = $argv[2];
$action = $argv[3];

if ($action == "addition") {
    $context->setStrategy(new ConcreteStrategyAdd());
}

if ($action == "subtraction") {
    $context->setStrategy(new ConcreteStrategySubtract());
}

if ($action == "multplication") {
    $context->setStrategy(new ConcreteStrategyMultiply());
}

if ($action == "division") {
    $context->setStrategy(new ConcreteStrategyDivide());
}

$result = $context->executeStrategy($firstNumber, $secondNumber);

print_r($result);