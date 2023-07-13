<?php
include_once "./HumanBegin.php";

class CalBMIHuman  {
    public $human ;

    public function calBMI($weight,$height){
        $human = new HumanBegin($weight,$height);
        $_weight  = $human->getWeight();
        $_height  = $human->getHeight();
        $bmi = $human->getMbI();
        return  $bmi;
    }
}
?>