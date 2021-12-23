<?php

namespace Utfpr\Pratica\Controller;

class Login extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessaRequisicao(): void
    {
        echo $this->RenderizaHtml('/../view/login.php', ['title' => 'Login']);
    }
}