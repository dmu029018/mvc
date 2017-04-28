<?php
/*
 * NO TOCAR ESTO SI NO SABES CÓMO FUNCIONA
 */
    use Core\View;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            /*Introduce tus estilos aquí*/
            *
            {
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
                justify-content:space-around;
                font-size:1.5rem;
                background: #cdf;
                border:1px solid #000;
                padding:1em;
            }
            
            #navigation>a
            {
                text-decoration:none;
                color: #69f;
                border: 3px #000 outset;
                border-radius: 50px 0px 50px 0px;
                background:#eef;
                padding:1em;
            }
            
            #navigation>a:hover
            {
                color:#6f9;
            }
            
            #main
            
        </style>
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
                
            </main>
            <aside id="sidebar">
                
            </aside>
            <footer id="footer">
                
            </footer>
        </div>
    </body>
</html>
