<?php

namespace Utfpr\Pratica\Model;

class UserControl
{
    private $db;

    /**
     * @param $db
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function recuperarUser(){
        return $this->db->recuperarUser();
    }

    public function loginCheck(){
        $users = $this->recuperarUser();
        $usuarioEntrada = $_POST["usuario"];
        $senhaEntrada = $_POST["senha"];

        foreach($users as $id => $usuario){

            if($usuario->getNome() === $usuarioEntrada){

                    if($usuario->checkSenha($senhaEntrada)){
                        $_SESSION['user'] = $usuario->getNome();
                        header("Location: http://localhost:8000/menu");
                        exit();
                    }

            }
        }
       header("Location: http://localhost:8000/login");
        exit();
    }
}