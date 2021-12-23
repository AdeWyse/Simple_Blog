<?php

namespace Utfpr\Pratica\Controller;

class ReadMessages extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessaRequisicao(): void
        {

        echo $this->RenderizaHtml('/../view/read-messages.php', ['title' => 'Messages']);
    }
}