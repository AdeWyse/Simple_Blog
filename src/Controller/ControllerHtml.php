<?php

namespace Utfpr\Pratica\Controller;

class ControllerHtml
{
    public function RenderizaHtml(string $caminhoTemplate, array $dados){
        extract($dados);
        require __DIR__ . '/../../view/' . $caminhoTemplate;
        $html = ob_get_clean();
        return $html;
    }
}
