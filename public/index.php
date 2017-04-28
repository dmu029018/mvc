<?php

define ("PROJECT_PATH",dirname(__DIR__));
define ("APP_DIR",PROJECT_PATH."/App/");

use Core\View;

View::Render('home');