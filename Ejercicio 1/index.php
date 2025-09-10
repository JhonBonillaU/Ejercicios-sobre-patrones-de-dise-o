<?php

require_once 'Personaje.php';
require_once 'Esqueleto.php';
require_once 'Zombi.php';
require_once 'PersonajeFactory.php';

echo "Nivel Fácil:\n";
$personajeFacil = PersonajeFactory::crearPersonaje('facil');
$personajeFacil->atacar();
$personajeFacil->mover();

echo "\nNivel Difícil:\n";
$personajeDificil = PersonajeFactory::crearPersonaje('dificil');
$personajeDificil->atacar();
$personajeDificil->mover();