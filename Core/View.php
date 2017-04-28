<?php

namespace Core;

class View {

    private static $view, $args=[];
    const VIEW_DIR=APP_DIR."assets/view/";
    
    public static function render($view, $args=[])
    {
        $config=json_decode(file_get_contents(APP_DIR."config/config.json"))->views;
        Self::$view=$view;
        Self::$args=$args;
        if (!isset(Self::$args['site_title']))
        {
            /*Toma valor por defecto.*/
            Self::$args['site_title']=$config->site_name;
        }
        
        if (!isset(Self::$args['page_title']))
        {
            /*Toma valor por defecto*/
            Self::$args['page_title']=$config->page_name;
        }
        
        Self::$args['src']=Self::VIEW_DIR."templates/"+Self::$view+".template.php";
        
        include_once Self::VIEW_DIR.$config->base_template;
    }
    
    public static function __callStatic($name, $args)
    {
        return Self::$args[$name];
    }
    
}
