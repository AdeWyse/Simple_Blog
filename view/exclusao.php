<?php
$tipo = $_GET['tp'];

if($tipo == 0){
    $postControl = new \Utfpr\Pratica\Model\PostControl();
    $post = $postControl->recuperaUmPost();
    $postControl->deletarPost($post);
    header("Location: http://localhost:8000/blog-home?id=0");
}elseif ($tipo == 1){
    $messageControl = new \Utfpr\Pratica\Model\MessageControl();
    $messages = $messageControl->recuperaTodasMessages();
    $id = $_GET['ms'];
    $messageControl->deletarMensagem(array_reverse($messages)[$id]);
    header("Location: http://localhost:8000/blog-home?id=0");
}
