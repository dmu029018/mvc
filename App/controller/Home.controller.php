<?php

namespace Controller;
use Core;
/**
 *
 * NOTA: Todos los métodos correspondientes a acciones deben terminar en Action.
 * 
 * @author A4Alumno
 */
class HomeController {

    protected function indexAction($args=[])
    {
        /*
         * Lógica del controlador
         */
        View::Render('home',$args);
    }
    
}
