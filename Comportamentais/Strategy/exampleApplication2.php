<?php

require_once __DIR__ . "/vendor/autoload.php";

USE DesignPattern\Strategy\Context;
USE DesignPattern\Strategy\Strategy;

$context = new Context();

$firstNumber    = $argv[1];
$secondNumber   = $argv[2];
$action         = $argv[3];

$routes = require __DIR__ . "/routes/routes.php";

if (array_key_exists($action, $routes) === false) {
    print "Ação não encontrada!";
    exit;
}

/** @var Strategy */
$actionClass = new $routes[$action];

$context->setStrategy($actionClass);
$result = $context->executeStrategy($firstNumber, $secondNumber);

print_r($result);