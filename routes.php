<?php

/**
 * Rederiza o conteúdo da página solicitada
 * @param string $sPage
 * @return string
 */
function render($sPage)
{
    switch ($sPage) {
        case 'home':
               return (new App\Controller\ControllerHome)->render();
        case 'Produto';
               return (new App\Controller\ControllerProduto)->render();
        case 'adicionarprodutos';
               return (new App\Controller\ControllerAdicionar)->render();
    }

    return 'Página não encontrada!';
}
