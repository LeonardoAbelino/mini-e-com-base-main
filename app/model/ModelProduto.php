<?php

namespace App\Model;

use App\Model\ModelPadrao;

class ModelProduto extends ModelPadrao
{
    public $id;

    function getTable(){
        return 'projeto.tbproduto';
    }
    function deleteProduto(){
        $iId = $this->id;

       return parent::delete([
       'procodigo' => $iId
        ]); 

    }

    function insertProduto(){
        $oCodigo = $this->oCodigo;
        $oDescricao = $this->oDescricao;
        $oTamanho = $this->oTamanho;

        return parent::insert([
            'procodigo' =>$this->getBdValue($oCodigo),
            'prodescricao' =>$this->getBdValue($oDescricao),
            'protamanho' =>$this->getBdValue($oTamanho),
        ]);
    }
}