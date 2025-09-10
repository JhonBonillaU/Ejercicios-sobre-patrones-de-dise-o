<?php

class Mensajero {
    private $salidaStrategy;

    public function __construct(SalidaStrategy $strategy) {
        $this->salidaStrategy = $strategy;
    }

    public function setStrategy(SalidaStrategy $strategy) {
        $this->salidaStrategy = $strategy;
    }

    public function enviarMensaje($mensaje) {
        $this->salidaStrategy->mostrarMensaje($mensaje);
    }
}