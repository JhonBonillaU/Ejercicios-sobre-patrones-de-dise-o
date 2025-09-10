<?php

class JSONStrategy implements SalidaStrategy {
    public function mostrarMensaje($mensaje) {
        echo json_encode(['mensaje' => $mensaje]) . "\n";
    }
}