<?php

abstract class ArmaDecorator implements Personaje {
    protected $personaje;

    public function __construct(Personaje $personaje) {
        $this->personaje = $personaje;
    }

    public function obtenerAtaque() {
        return $this->personaje->obtenerAtaque();
    }
}