<?php
$palabra = "ejemplo";

// Obtener la longitud de la palabra
$longitud = strlen($palabra);

// Recorrer la palabra letra por letra usando un bucle for
for ($i = 0; $i < $longitud; $i++) {
    $letra = $palabra[$i];
    // Hacer algo con cada letra, por ejemplo, imprimir
    echo $letra . PHP_EOL;
}