<?php

namespace Utfpr\Pratica\Controller;

class Contact extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessaRequisicao(): void
    {
        echo $this->RenderizaHtml('/../view/contact.php', ['title' => 'Contact']);
    }
}