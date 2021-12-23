<?php

namespace Utfpr\Pratica\Model;

use Utfpr\Pratica\Entities\Post;
use Utfpr\Pratica\Entities\Message;
use Utfpr\Pratica\Entities\User;

class Database
{
    private $db;

    public function __construct(){
        $this->db = pg_connect("host=localhost dbname=postgres user=postgres password=a2313863");
    }

    public function registraPost(Post $entrada){
        $dadosInserir = ['titulo'=>$entrada->getTitulo(), 'preview'=>$entrada->getPreview(), 'posttext'=>$entrada->getTextoBase, 'postid'=>null];
        $resultado = pg_insert($this->getDb(), "post", $dadosInserir);
        return $resultado;
    }
    public function getPost(int $indice){

        $post = pg_fetch_array(pg_query($this->getDb(), "SELECT * FROM post"),$indice);
        $titulo = $post[0];
        $preview = $post[1];
        $texto = $post[2];
        $id = $post[3];
        $resultado = new Post($id, $titulo, $preview, $texto);
        return $resultado;
    }

    public function deletePost(Post $postDelete){
        $condicao = array(
            "titulo" => $postDelete->getTitulo(),
            "preview"=> $postDelete->getPreview(),
        );
        pg_delete($this->db, "post", $condicao);
    }

    /**
     * @return array
     */
    public function recuperarTodosOsPosts(): array{
        $postIdQuery = pg_query($this->getDb(), "SELECT postid FROM post");
        $postIds = pg_fetch_all($postIdQuery);
        $posts = array();
        foreach($postIds as $postId=> $postNumber){
            array_push($posts, $this->getPost($postId));
        }

        return array_reverse($posts);
    }

    public function registraMessage(Message $message){
        $dadosInserir = ['contatoid'=>null,'nome'=>$message->getNome(), 'email'=>$message->getEmail(), 'mensagem'=>$message->getMensagem()];
        $resultado = pg_insert($this->getDb(), "contato", $dadosInserir);
        return $resultado;
    }

    public function getMessage(int $indice){

        $message = pg_fetch_array(pg_query($this->getDb(), "SELECT * FROM contato"),$indice);
        $id = $message[0];
        $nome = $message[1];
        $email = $message[2];
        $mensagem = $message[3];
        $resultado = new Message($id,$nome, $email, $mensagem);
        return $resultado;
    }

    public function deleteMessage(Message $messageDelete){
        $condicao = array(
            "contatoid" => $messageDelete->getId(),
            "mensagem"=> $messageDelete->getMensagem(),
        );
        pg_delete($this->db, "contato", $condicao);
    }

    /**
     * @return array
     */
    public function recuperarTodasAsMessages(): array{
        $messageIdQuery = pg_query($this->getDb(), "SELECT contatoid FROM contato");
        $messageIds = pg_fetch_all($messageIdQuery);
        $messages = array();
        foreach($messageIds as $messageId=> $postNumber){
            array_push($messages, $this->getMessage($messageId));
        }

        return array_reverse($messages);
    }

    public function getUser(int $indice){

        $user = pg_fetch_array(pg_query($this->getDb(), "SELECT * FROM usuarios"),$indice);
        $nome = $user[0];
        $senha = $user[1];
        $resultado = new User($nome, $senha);
        return $resultado;
    }

    public function recuperarUser(){
        $userIdQuery = pg_query($this->getDb(), "SELECT nome FROM usuarios");
        $userIds = pg_fetch_all($userIdQuery);
        $users = array();
        foreach($userIds as $userId=> $userNumber){
            array_push($users, $this->getUser($userId));
        }

        return $users;
    }
    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }


}