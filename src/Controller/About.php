<?php

namespace Utfpr\Pratica\Controller;

class About extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessaRequisicao(): void
    {
        echo $this->RenderizaHtml('/../view/about.php', ['title' => 'About']);
    }
}