<?php

namespace Core\View;

class View {

    private $view, $args=[];
    
    public static function render($view, $args=[])
    {
        $this->view=$view;
        $this->args=$args;
        if (!isset($this->args['site_title']))
        {
            $this->args['page_title']="Mi sitio";
        }
        
        if (!isset($this->args['page_title']))
        {
            $this->args['page_title']="Mi página";
        }
        
        $this->args['src']=APP_DIR."assets/view/templates/{$this->view}.template.php";
        
        include_once APP_DIR."assets/view/base.template.php";
    }
    
    public static function __callStatic($name, $args)
    {
        return $this->args[$name];
    }
    
}
