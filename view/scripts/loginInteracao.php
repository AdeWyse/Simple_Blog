<?php

namespace Utfpr\Pratica\Controller;

session_start();
$userControl = new \Utfpr\Pratica\Model\UserControl();
$users = $userControl->recuperarUser();
$userControl->loginCheck($users);
   /*$usuarioEntrada = $_POST["usuario"];
    $senhaEntrada = $_POST["senha"];

   $db = pg_connect("host=localhost dbname=postgres user=postgres password=a2313863");
    $usersQuery = pg_query($db, "SELECT nome FROM usuarios");
    $users = pg_fetch_all($usersQuery);
    $passwordsQuery = pg_query($db, "SELECT senha FROM usuarios");
    $passwords = pg_fetch_all($passwordsQuery);

   foreach($users as $id => $usuario){
      if($usuario["nome"] === $usuarioEntrada){
          foreach($passwords as $idp => $senha){
              if(password_verify($senhaEntrada, $senha["senha"]) && $id === $idp){
                    $_SESSION['user'] = $usuario['nome'];
                 header("Location: http://localhost:8000/menu");
                 exit();
              }
          }
        }
    }
    header("Location: http://localhost:8000/login");
    exit();*/
    //Mensagem d erro de senha / login








