<?php

namespace Utfpr\Pratica\Model;

use Utfpr\Pratica\Entities\Message;

class MessageControl
{
    private $db;

    /**
     * @param $db
     */
    public function __construct()
    {
        $this->db = new Database();
    }
    public function  criarNovaMessage(): Message{
        $nomeEntrada = $_POST["fname"];
        $emailEntrada = $_POST["email"];
        $mensagemEntrada = $_POST["mensagem"];
        $novaMensagem = new Message($nomeEntrada, $emailEntrada, $mensagemEntrada);
        return $novaMensagem;
    }

    public function registrarMessage(Message $message){

        return  $this->db->registraMessage($message);
    }

    public function recuperaTodasMessages(): array{
        return $this->db->recuperarTodasAsMessages();
    }

    public function deletarMensagem(Message $mensagemDeletar){
        return $this->db->deleteMessage($mensagemDeletar);
    }

}