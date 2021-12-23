<?php

namespace Utfpr\Pratica\Controller;

class Menu extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessaRequisicao(): void
    {
        echo $this->RenderizaHtml('/../view/menu.php', ['title' => 'Menu']);
    }
}