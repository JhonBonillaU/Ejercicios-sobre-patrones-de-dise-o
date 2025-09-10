<?php

class ConsolaStrategy implements SalidaStrategy {
    public function mostrarMensaje($mensaje) {
        echo "[Consola] " . $mensaje . "\n";
    }
}