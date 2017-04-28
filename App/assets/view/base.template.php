<?php
/*
 * NO TOCAR
 */
    use Core\View;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=View::site_title()?></title>
        <style>
            /*
            Aquí solamente deberían introducirse estilos relacionados con el layout de la página.
            Para estilos concretos, usar hojas de estilos.    
            */
            *
            {
                /*RESET*/
                margin:0;
                padding:0;
            }
            
            body
            {
                font-family: helvetica;
                font-size:16px;
            }
            
            #container
            {
                width:80%;
                margin:auto;
            }
            
            #header
            {
                padding:1em;
                background:#000;
                color:#fff;
            }
            
            #header>hgroup
            {
                text-align:center;
                text-shadow:1px 1px 1px #666;
            }
            
            #header>hgroup>h1
            {
                
            }
            
            #header>hgroup>h2
            {
                color:#aaa;
            }
            
            #navigation
            {
                display:flex;
                flex-wrap:wrap;
                justify-content:space-around;
                font-size:1.5rem;
                background: #cdf;
                border:1px solid #333;
                padding:1rem;
            }
            
            #navigation>a
            {
                text-decoration:none;
                color: #69f;
                text-shadow: 1px 1px 1px #000;
                border: 3px #000 outset;
                border-radius: 50px 0px 50px 0px;
                background:#eef;
                padding:1rem;
            }
            
            #navigation>a:hover
            {
                color:#6f9;
            }
            
            #main
            {
                padding:1rem;
            }
            
            li
            {
                margin-left:1rem;
            }
            
        </style>
        <link rel="stylesheet" src="">
    </head>
    <body>
        <div id="container">
            <header id="header">
                <hgroup>
                    <h1><?=View::site_title()?></h1>
                    <h2><?=View::page_title()?></h2>
                </hgroup>
            </header>
            <nav id="navigation">
                <a href="">Ítem #1</a>
                <a href="">Ítem #2</a>
                <a href="">Ítem #3</a>
                <a href="">Ítem #4</a>
                <a href="">Ítem #5</a>
            </nav>
            <main id="main">
                <?=View::main_content()?>
            </main>
            <aside id="sidebar">
                
            </aside>
            <footer id="footer">
                
            </footer>
        </div>
    </body>
</html>
