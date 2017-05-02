<?php

namespace Core;
use Controller;

function render($controller, $action, $args=[])
{
    (new ucfirst($controller))->$action($args);
}