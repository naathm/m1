<?php

class FCamara_OlaMundo_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction (){ 
        echo "OLá FC!"
    }
    public function OlaMundoAction (){
        echo "ALO ALO ALO";
    }


public function blockAction(){
   $this->loadLayout();
   $block = $this->getLayout()->creatBlock('FCamara_OlaMundo_Block/hello');
   $block->setText("Mensagem no bloco");
   $this->getLayout()-getBlock('content')->insert($block);
   $this->renderLayout();
}       
    }         

    