<?php

namespace Utfpr\Pratica\Controller;

class BlogPost extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessaRequisicao(): void
    {
        echo $this->RenderizaHtml('/../view/blog-post.php', ['title' => 'Post']);
    }
}