<?php

class PersonajeFactory {
    public static function crearPersonaje($nivel) {
        if ($nivel == 'facil') {
            return new Esqueleto();
        } elseif ($nivel == 'dificil') {
            return new Zombi();
        } else {
            throw new Exception("Nivel de juego no válido.");
        }
    }
}