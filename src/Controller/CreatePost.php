<?php

namespace Utfpr\Pratica\Controller;

class CreatePost extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessaRequisicao(): void
    {
        echo $this->RenderizaHtml('/../view/create-post.php', ['title' => 'New Post']);
    }
}