<?php

class TXTStrategy implements SalidaStrategy {
    public function mostrarMensaje($mensaje) {
        file_put_contents('salida.txt', $mensaje);
        echo "Mensaje guardado en salida.txt\n";
    }
}