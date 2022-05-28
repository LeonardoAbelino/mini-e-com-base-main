<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewAdicionar extends ViewPadrao
{
    static function formularioproduto()
    {
        $sHtml = '
        <form action="index.php?pg=Produto&act=insert" method="post">
            <input type="text" name="procodigo" placeholder="Codigo">
            <br><br>
            <input type="text" name="prodescricao" placeholder="Descrição">
            <br><br>
            <input type="text" name="protamanho" placeholder="Tamanho">
            <br><br>
            <input type="submit" value="enviar">
        </form>';
        
        return $sHtml;
    }
}
