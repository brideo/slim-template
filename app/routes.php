<?php

$routes = glob(__DIR__.'/routes/*.php', GLOB_BRACE);

foreach($routes as $route) {
    require_once $route;
}
