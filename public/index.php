<?php

require '../vendor/autoload.php';
require '../config/database.php';

$controller = "\App\Controller\PostController";

if(!isset($_REQUEST['c']))
{
    $controller = new $controller;
    $controller->index();
}
else
{
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index';

    // Instanciamos el controlador
    $controller = '\App\Controller\\'. ucwords($controller) . 'Controller';
    $controller = new $controller;
    call_user_func( array( $controller, $accion ) );
}