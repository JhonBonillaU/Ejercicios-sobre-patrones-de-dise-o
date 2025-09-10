<?php

class EspadaDecorator extends ArmaDecorator {
    public function obtenerAtaque() {
        return parent::obtenerAtaque() + 5;
    }
}