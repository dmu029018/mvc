<?php

namespace Core;

/**
 * Clase que representa y procesa las vistas.
 * -No puede instanciarse.
 */
abstract class View {

    /**
     * @var string Nombre de la plantilla utilizada.
     */
    private static $view;
    
    /**
     * @var array_assoc Argumentos enviados a la vista.
     */
    private static $args=[];
    
    /**
     * Ruta del directorio base de las vistas. 
     */
    const VIEW_DIR=APP_DIR."assets/view/";
    
    /**
     * Renderiza una vista utilizando una plantilla y estableciendo unos atributos.
     * @param type $view
     * @param type $args
     */
    public static function render($view, $args=[])
    {
        //Carga la configuración de vistas.
        $config=json_decode(file_get_contents(APP_DIR."config/config.json"))->views;
        
        //Da valor a los atributos de la vista
        
        Self::$view=$view;
        
        if(is_array($args))
        {
            Self::$args=$args;
        }
        
        //Comprueba si hay un atributo de título de sitio y de página. Si no, utiliza los valores por defecto.
        
        if (!isset(Self::$args['site_title']))
        {
            Self::$args['site_title']=$config->site_name;
        }
        
        
        if (!isset(Self::$args['page_title']))
        {
            Self::$args['page_title']=$config->page_name;
        }
        
        //Fija la ruta de la plantilla utilizada.
        $src=Self::VIEW_DIR."templates/".Self::$view.".template.php";
        
        
        if(file_exists($src))
        {
            //Obtiene el contenido de una plantilla
            $content=file_get_contents($src);
            
            //Itera sobre los atributos enviados.
            foreach(Self::$args as $k=>$v)
            {
                //Reemplaza las claves de los atributos por sus valores.
                //Si un atributo no ha sido pasado por una plantilla o bien no es válido (Atributo reservado), no será reemplazado.
                //Esto no se aplica al contenido de la plantilla base.
                $content=str_replace('${'.$k.'}', $v,$content);
                
            }
            
            //Establece el contenido de la página.
            Self::$args['main_content']=$content;
            
        }
        else
        {
            //Si no se ha establecido ninguna plantilla válida, se tomará el valor del atributo ['main_content'] como contenido
            Self::$args['main_content']="";
        }
        
        //Se incluye la plantilla base establecida.
        include_once Self::VIEW_DIR.$config->base_template;
    }
    
    public static function __callStatic($name, $args)
    {
        return Self::$args[$name];
    }
    
}
