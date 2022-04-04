<?php

require_once __DIR__ . "/../vendor/autoload.php";

use DesignPattern\State\exemplo1\Contexto;
use DesignPattern\State\exemplo1\EstadoDeParada;
use DesignPattern\State\exemplo1\EstadoInicial;

$contexto = new Contexto();

$estadoInicial = new EstadoInicial();
$estadoInicial->fazerAcao($contexto);

print $contexto->getEstado();

$estadoDeParada = new EstadoDeParada();
$estadoDeParada->fazerAcao($contexto);

print $contexto->getEstado();