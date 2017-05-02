<?php

define ("PROJECT_PATH",dirname(__DIR__));
define ("APP_DIR",PROJECT_PATH."/App/");

function autoload_classes($cls)
{
    $file_name = PROJECT_PATH. '/' . str_replace('\\', '/', $cls) .'.php';
    if(is_file($file_name))
    {
        include_once $file_name;
    }
}

//registramos el autoload autoload_classes
spl_autoload_register('autoload_classes');

use Controller;

/**
 * Controlador frontal de la aplicación
 * 
 */

$ctrl=new HomeController();


