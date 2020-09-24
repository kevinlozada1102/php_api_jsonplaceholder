<?php

require '../vendor/autoload.php';

$productoController = new \App\Controller\PostController();
$productos = $productoController->index();
include "../resources/views/list.php";

