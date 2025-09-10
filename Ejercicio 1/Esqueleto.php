<?php

class Esqueleto implements Personaje {
    public function atacar() {
        echo "Esqueleto ataca con un golpe débil.\n";
    }

    public function mover() {
        echo "Esqueleto se mueve lentamente.\n";
    }
}