<?php

class formController{

    private $modelForm;
    private $uiForm;
    private $uiForm2;
    
        public function getForm(){
            
            $this->uiForm= new formView();
            $this->uiForm->tampilFormAwal();
    
        }
    public function getFormIsi(){
        $this->modelForm= new formModel();
        $isi=$this->modelForm->menginput();
        $acak=$this->modelForm->randomThings();

        $this->uiForm2 = new formView();
        $this->uiForm2->tampilisi($isi,$acak);

    }


}