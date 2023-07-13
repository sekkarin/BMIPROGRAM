<?php
include_once "./HumanBegin.php";

class CalBMIHuman  {
    public $human ;

    public function calBMI($weight,$height){
        $this->human = new HumanBegin($weight,$height);
        $bmi = $this->human->getMbI();
        return  $bmi;
    
    }
}
?>