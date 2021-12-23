<?php

namespace Utfpr\Pratica\Controller;

class Logout extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessaRequisicao(): void
    {
        echo $this->RenderizaHtml('/../public/scripts/logoutInteracao.php', ['' => '']);
    }
}