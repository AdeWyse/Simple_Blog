<?php
namespace Utfpr\Pratica\Controller;

session_start();
    if(!isset($_SESSION['user'])){
        $session = '';
    }else{
        $session = $_SESSION['user'];
    }

    if($session == 'Adeline'){
        $logado = true;
    }else{
        $logado = false;
    }
    $titulo = $_SERVER['REQUEST_URI'];
    if(strpos($titulo, '/blog-home') === false || strpos($titulo, '/home') === false){
           if ($logado == false && (strpos($titulo, '/new-post') === 0 || strpos($titulo, '/menu') === 0 || strpos($titulo, '/messages') === 0)) {
              header("Location: http://localhost:8000/blog-home?id=0&redirected=true");
           }
    }


?>
