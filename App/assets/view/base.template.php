<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            }
            
            #navigation>a
            {
                text-decoration:none;
                color: #69f;
                border: 1px solid #333;
                border-radius: 10px 0px 10px 0px;
                background:#eef;
            }
            
            #navigation>a:hover
            {
                color:#6f9;
            }
            
            
            
        </style>
    </head>
    <body>
        <div id="container">
            <header id="header">
                <hgroup>
                    <h1>Nombre del sitio</h1>
                    <h2>Nombre de la página</h2>
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
