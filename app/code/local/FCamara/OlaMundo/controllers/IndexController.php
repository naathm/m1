<?php

class FCamara_OlaMundo_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction (){ 
        echo "OLá FC!";
    }
    public function olaAction (){
        echo "ALO ALO ALO";
    }


    public function blockskAction(){
        $this->loadLayout();
        $block = $this->getLayout()->creatBlock('fcamara_olamundo/hello');
        $block->setText("Mensagem no bloco");
        $this->getLayout()-getBlock('content')->insert($block);
        $this->renderLayout();
    } 

}      

?>

    