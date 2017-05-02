<?php

namespace Core;

abstract class Controller 
{

    public function __call($action, $args=[])
    {
        if(method_exists($this, $action."Action"))
        {
            $this->{$action."Action"}($args);
        }
        else
        {
            throw new Exception("Acción desconocida: '$action'");
        }
    }
    
    
    
}
