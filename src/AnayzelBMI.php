<?php
include_once "./HumanBegin.php";
class AnayzelBMI  {
    private $human ;
    public function anayzel($weight,$height){
        $this->human = new HumanBegin($weight,$height);    
        $bmi = $this->human->getMbI();
        if ($bmi <= 18.5 && $bmi > 0) {
            return "ผอมเกินไป";
        }elseif($bmi >= 18.6 && $bmi <=  24.0){
            return "น้ำหนักปกติ";
        }elseif($bmi >= 25.0  && $bmi <=  29.9){
            return"อ้วน";
        }else{
            return"อ้วนมาก";
        }
    }
}
?>