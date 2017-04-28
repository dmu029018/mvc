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

use Core\View;

View::Render('home',[
    "saludo"=>"Hola Mundo",
    "variable1"=>"Valor de la variable 1",
    "variable2"=>"Valor de la variable 2",
    "variable3"=>"Valor de la variable 3",
]);