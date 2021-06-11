<?php
Class Ortschaften {

    private $ort;

    public function __construct($ort = "test")
    {
        $this->ort = $ort;
    }

   
    public function getOrt(){
        return $this->ort;
    }


    public function setOrt($ort){
        $this->ort = $ort;
    }


}
?>