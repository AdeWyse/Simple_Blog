<?php
// php -S localhost:8000 -t C:\Users\UTFPR\Desktop\Alura\Pratica\public
require_once __DIR__.'/../vendor/autoload.php';
$routes = require __DIR__.'/../config/configRoutes.php';

$caminho = $_SERVER['PATH_INFO'];

if(!array_key_exists($caminho, $routes)){
    http_response_code(404);
    exit();
}

$classeControladora = $routes[$caminho];
/** @var InterfaceControladorRequisicao $controlador */
$controlador = new $classeControladora();
$controlador->processaRequisicao();