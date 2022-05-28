<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewProduto extends ViewPadrao
{
   static function getHtmlTabelaProduto(array $a){
        $sHtml= '
        <table class="table">
          <thead>
           <tr>
             <th scope="col">Código</th>
             <th scope="col">Descrição</th>
             <th scope="col">Tamanho</th>
           <tr>
          </thead>
    <tbody>';

    foreach ($a as $x){
        $sHtml .= '
        <tr>
          <td>' .$x["procodigo"].'</td>
          <td>' .$x["prodescricao"].'</td>
          <td>' .$x["protamanho"].'</td>
          <td><a href= "index.php?pg=Produto&act=delete&proid='.$x["procodigo"].'">Excluir</a></td>
        </tr>';
        }
        return $sHtml;
    }
}
