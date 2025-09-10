<?php

require_once 'SalidaStrategy.php';
require_once 'ConsolaStrategy.php';
require_once 'JSONStrategy.php';
require_once 'TXTStrategy.php';
require_once 'Mensajero.php';

$mensajero = new Mensajero(new ConsolaStrategy());
$mensajero->enviarMensaje("Este es un mensaje de prueba.");

$mensajero->setStrategy(new JSONStrategy());
$mensajero->enviarMensaje("Este es otro mensaje de prueba.");

$mensajero->setStrategy(new TXTStrategy());
$mensajero->enviarMensaje("Este mensaje se guarda en un archivo.");