<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function biggerNum($num1,$num2){
            echo "<br> Number 1: $num1 <br> Number 2: $num2 <br>";
            return($num1 > $num2 ? $num1 : $num2);
        }
        $ans = biggerNum(rand(0,10),rand(0,10));
        echo "The bigger number is: $ans";
    ?>
</body>
</html>