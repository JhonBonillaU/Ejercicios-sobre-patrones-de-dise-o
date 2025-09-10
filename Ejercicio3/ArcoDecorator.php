<?php

class ArcoDecorator extends ArmaDecorator {
    public function obtenerAtaque() {
        return parent::obtenerAtaque() + 8;
    }
}