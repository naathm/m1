<?php

class Academia_Aula03Exercicio01_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction(){
        echo "Teste";
    }

    public function olaAction(){
        echo "Teste 2";
    }

    public function blocksAction(){
        $this->loadLayout();
        $block = $this->getLayout()->creatBlock('academia_aula03exercicio01/hello');
        $block->setText("Aula 03 Exercicio 01");
        $this->getLayout()-getBlock('content')->insert($block);
        $this->renderLayout();
    }
}
?>

