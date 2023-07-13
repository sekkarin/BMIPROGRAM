<?php
class HumanBegin{
    private $height;
    private $weight;
    private $bmi;

    public function __construct($weight,$height)
    {
        $this->height = $height/100;
        $this->weight = $weight;
        $this->bmi = $weight / (($height/100) * ($height/100));
    }

    public function setHeight($height){
        $this->height = $height/100;
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }
    
    public function getMbI(){
        return $this->bmi;
    }
    public function setMbI($bmi){
        return $this->bmi = $bmi;
    }
    public function getHeight(){
        return $this->height;
    }
    
    public function getWeight(){
        return $this->weight;
    }
}
?>