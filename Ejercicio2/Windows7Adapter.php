<?php

require_once 'Windows10.php';
require_once 'Windows7Archivo.php';

class Windows7Adapter implements Windows10 {
    private $archivoWindows7;

    public function __construct(Windows7Archivo $archivo) {
        $this->archivoWindows7 = $archivo;
    }

    public function abrirArchivoWindows10($nombreArchivo) {
        echo "Adaptando el archivo para Windows 10...\n";
        $this->archivoWindows7->abrirVersionAnterior($nombreArchivo);
    }
}