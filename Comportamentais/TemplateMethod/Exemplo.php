<?php

require_once __DIR__ . "/../vendor/autoload.php";

use DesignPattern\TemplateMethod\Criquete;
use DesignPattern\TemplateMethod\Futebol;

$game = new Criquete();
$game->play();

echo PHP_EOL;

$game = new Futebol();
$game->play();
