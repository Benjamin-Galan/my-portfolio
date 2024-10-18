<?php

// Define la ruta a la carpeta de plantillas utilizando el directorio actual
define('TEMPLATES_URL', __DIR__ . '/templates');

// Define la ruta al archivo de funciones utilizando el directorio actual
define('FUNCIONES_URL', __DIR__ . '/funciones.php');

function incluirTemplate($nombre, bool $inicio = false)
{
    // Incluye el archivo de plantilla especificado en la ruta TEMPLATES_URL
    include TEMPLATES_URL . "/{$nombre}.php";
}

function debugear($variable)
{
    // Imprime la variable formateada en una etiqueta <pre> para mejor legibilidad
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    // exit; // Termina la ejecución del script después de mostrar la variable
}
