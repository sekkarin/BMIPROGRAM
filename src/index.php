<?php
    class HumanBegin{
        private $height;
        private $weight;
        
        public function setHeight($height){
            $this->height = $height/100;
        }

        public function setWeight($weight){
            $this->weight = $weight;
        }
        
        public function getHeight(){
            return $this->height;
        }
        
        public function getWeight(){
            return $this->weight;
        }
        public function myBMI (){
             $calMbiHum = new CalBMIHuman();
            return $calMbiHum->calBMI($this->weight,$this->height);
            // return $this->weight /( pow($this->height,2));
            // return $calMbiHum->calBMI($weight,$height);
        }
        public function myAnayzelBMI (){
            $anayzel = new AnayzelBMI();
            return $anayzel->anayzel($this-> myBMI());
        }
    }
    class CalBMIHuman  {
        public function calBMI($weight,$height){
            
            return   $weight / ($height * $height);
        }
    }
    class AnayzelBMI  {
        public function anayzel($mbi){
            if ($bmi <= 18.5) {
                return "ผอมเกินไป";
            }elseif($bmi >= 18.6 && $bmi <=  24.0){
                return "น้ำหนักปกติ";
            }elseif($bmi >= 25.0  && $bmi <=  29.9){
                return "อ้วน";
            }else{
                return "อ้วนมาก";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h5>การคำนวณ BMI</h5>
    <form method="POST" action="/" class="" >
        <label for="weight">Your Weight</label>
        <input class="input"  type="number" id="weight" name="weight" placeholder="นํ้าหนักของคุณ" >
        <label for="hight">Your hight</label>
        <input class="input" type="number" id="hight" name="hight" placeholder="ส่วนสูงของคุณ">
        <input type="submit" value="Submit" class="btn">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $myself = new HumanBegin();
            $myself->setWeight($_POST["weight"]);
            $myself->setHeight($_POST["hight"]);

            echo "<p class='text'>BMI = ".number_format($myself->myBMI() ,2)."</p>";
            echo "<p class='text'>รูปร่าง = ".$myself->myAnayzelBMI()."</p>";
          }

    ?>

</body>
</html>
