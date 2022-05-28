<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewAdicionar;
use App\View\ViewHome;

class ControllerAdicionar extends ControllerPadrao
{

    protected function processPage()
    {
        $sTitle = 'Jovens Talentos';

        $sContent = ViewAdicionar::render([
            // Passar aqui os parâmetros do conteúdo da página
            'conteudo' => ViewAdicionar::formularioproduto()
        ]);

        $this->footerVars = [
            // Passar aqui os parametros do footer da página
            'footerContent' => '<h5>Welcome!</h5>'
        ];

        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
}
