<?php

namespace Utfpr\Pratica\Controller;

class Exclusao extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessaRequisicao(): void
    {
        echo $this->RenderizaHtml('/../view/exclusao.php', ['' => '']);
    }
}