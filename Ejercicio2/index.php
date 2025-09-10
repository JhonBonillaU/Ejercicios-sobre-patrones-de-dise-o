<?php

require_once 'Windows10.php';
require_once 'Windows7Archivo.php';
require_once 'Windows7Adapter.php';

// El cliente de Windows 10 solo interactúa con la interfaz que conoce
function clienteWindows10(Windows10 $sistema, $archivo) {
    $sistema->abrirArchivoWindows10($archivo);
}

// Creamos un archivo de la versión anterior
$archivoAntiguo = new Windows7Archivo();

// Creamos un adaptador que envuelve el archivo antiguo
$adaptador = new Windows7Adapter($archivoAntiguo);

// El cliente usa el adaptador para abrir el archivo
clienteWindows10($adaptador, "documento_viejo.docx");