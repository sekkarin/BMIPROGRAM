<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    <link rel="stylesheet" href="main.css">
    <link href="../dist/output.css" rel="stylesheet">
</head>

<body>
    <div class="flex-Wrapper">
        <div class="flex-1">
            <div class=" ">
                <h5>การคำนวณ BMI</h5>
                <form method="POST" action="" class="flex-Wrapper-column form">
                    <label for="weight">Your Weight</label>
                    <input class="input" required type="number" id="weight" name="weight" placeholder="นํ้าหนักของคุณ">
                    <label for="hight">Your hight</label>
                    <input class="input" required type="number" id="hight" name="hight" placeholder="ส่วนสูงของคุณ">
                    <input type="submit" value="คำนวณ" class="btn">
                </form>
            </div>
            <?php
            include_once "./AnayzelBMI.php";
            include_once "./CalBMIHuman.php";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $weight = $_POST["weight"];
                $hight = $_POST["hight"];
                $anayzeBmi = new AnayzelBMI();
                $callBmi = new CalBMIHuman();
                echo "<p class='text'>BMI = " . number_format($callBmi->calBMI($weight, $hight), 2) . "</p>";
                echo "<p class='text'>รูปร่าง = " . $anayzeBmi->anayzel($weight, $hight) . "</p>";
            }
            ?>
        </div>
        <div class="">
            <img src="./public/images/bg.svg" alt="" srcset="" class="image">
        </div>
    </div>

</body>

</html>