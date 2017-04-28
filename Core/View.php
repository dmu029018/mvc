<?php

namespace Core;

class View {

    private static $view, $args=[];
    const VIEW_DIR=APP_DIR."assets/view/";
    
    
    public static function render($view, $args=[])
    {
        Self::$view=$view;
        Self::$args=$args;
        if (!isset(Self::$args['site_title']))
        {
            Self::$args['page_title']="Mi sitio";
        }
        
        if (!isset(Self::$args['page_title']))
        {
            Self::$args['page_title']="Mi página";
        }
        
        Self::$args['src']=VIEW_DIR."templates/"+Self::$view+".template.php";
        
        include_once VIEW_DIR."base.template.php";
    }
    
    public static function __callStatic($name, $args)
    {
        return $Self::$args[$name];
    }
    
}
