<?php
Class Eingaben {

    private $vonwo;
    private $wohin;



    public function __construct($vonwo = "test", $wohin = "test")
    {
        $this->vonwo = $vonwo;
        $this->wohin = $wohin;
    }

   
    public function getVonwo(){
        return $this->vonwo;
    }


    public function setVonwo($vonwo){
        $this->vonwo = $vonwo;
    }

    public function getWohin(){
        return $this->wohin;
    }


    public function setWohin($wohin){
        $this->wohin = $wohin;
    }


}
?>