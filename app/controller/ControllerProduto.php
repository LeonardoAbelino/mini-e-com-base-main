<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewProduto;
use App\Db\Connection;
use App\Model\ModelProduto;

class ControllerProduto extends ControllerPadrao
{
   function processPage(){
    //*Var_dump(Connection::get());

    $oModelProduto = new ModelProduto;
    $a = $oModelProduto->getAll();

    //*var_dump($a);

       $sTitle = 'Produto';
       $sContent = ViewProduto::render([
           'ProdutoContent' => '<h1>Produtos</h1>',
           'tabelaProduto' =>  ViewProduto::getHtmlTabelaProduto($a)
       ]);
       
       $this->footerVars = [
        // Passar aqui os parametros do footer da página
        'footerContent' => '<h5>Bem Vindo!</h5>'
    ];
       
       return parent::getPage(
        $sTitle,
        $sContent
    );
   }
   function processDelete(){
       $iIdProduto = $_GET['proid'] ??= '';

       $oModelProduto = new ModelProduto;
       $oModelProduto->id = $iIdProduto;

       $this->footerVars = [
            'footerContent' => ''
       ];

       if($oModelProduto->deleteProduto()){
           $this->footerVars = [
               'footerContent' => '<div class="alert alert-success" role="alert">
               A simple success alert—check it out!
             </div>'
           ];
       }

       $oModelProduto->deleteProduto();

       return $this->processpage();
    }

    function processinsert(){
        $oCodigo = $_POST['procodigo'];
        $oDescricao = $_POST['prodescricao'];
        $oTamanho = $_POST['protamanho'];

        $oModelProduto = new Modelproduto;

        $oModelProduto->oCodigo=$oCodigo;
        $oModelProduto->oDescricao=$oDescricao;
        $oModelProduto->oTamanho=$oTamanho;

        $oModelProduto->insertProduto();
        return $this->processPage();
    }

   
}
