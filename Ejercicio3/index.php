<?php

require_once 'Personajes.php';
require_once 'Guerrero.php';
require_once 'Mago.php';
require_once 'ArmaDecorator.php';
require_once 'EspadaDecorator.php';
require_once 'ArcoDecorator.php';

$guerrero = new Guerrero();
echo "Ataque del guerrero base: " . $guerrero->obtenerAtaque() . "\n";

$guerreroConEspada = new EspadaDecorator($guerrero);
echo "Ataque del guerrero con espada: " . $guerreroConEspada->obtenerAtaque() . "\n";

$guerreroConEspadaYArco = new ArcoDecorator($guerreroConEspada);
echo "Ataque del guerrero con espada y arco: " . $guerreroConEspadaYArco->obtenerAtaque() . "\n";