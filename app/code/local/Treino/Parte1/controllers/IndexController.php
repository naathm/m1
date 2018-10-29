<?php

class Treino_Parte1_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction (){
        echo "Alo, testando!";
    }

    public function blocksAction(){
        $this->loadLayout();
        $block = $this->getLayout()->createBlock('treino_parte1/testando');
        $block->setText("Mensagem no bloco");
        $this->getLayout()->getBlock('content')->insert($block);
        $this->renderLayout();
    }
}

?>