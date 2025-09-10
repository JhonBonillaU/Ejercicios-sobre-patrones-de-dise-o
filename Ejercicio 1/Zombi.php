<?php

class Zombi implements Personaje {
    public function atacar() {
        echo "Zombi ataca con una mordida poderosa.\n";
    }

    public function mover() {
        echo "Zombi se arrastra rápidamente.\n";
    }
}