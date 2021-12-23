<?php

namespace Utfpr\Pratica\Controller;

class BlogHome extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessaRequisicao(): void
    {

        echo $this->RenderizaHtml('/../view/blog-home.php', ['title' => 'Blog']);

    }
}