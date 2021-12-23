<?php

namespace Utfpr\Pratica\Controller;

class ResultadoPesquisa extends ControllerHtml implements InterfaceRequisitionController
{

    public function ProcessaRequisicao(): void
    {
        echo $this->RenderizaHtml('/../view/resultado-pesquisa.php', ['title' => 'Resultado']);
    }
}