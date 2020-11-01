<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
    Number 1: <input type="number" name="num1">
    Operator: <input type="text" name="opr">
    Number 2: <input type="number" name="num2">
    <input type="submit" value="Submit">
    </form>
    
    <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $opr = $_GET["opr"];
        switch($opr){
            case "/":
                $sum = $num1 / $num2;
                break;
            case "*":
                $sum = $num1 * $num2;
                break;
            case "+":
                $sum = $num1 + $num2;
                break;
            case "-":
                $sum = $num1 - $num2;
                break;
            default:
                echo "Something went wrong.";
        }
        if (is_float($sum)){
        $sum = round($sum,2);
        }
        echo "$num1 $opr $num2 is $sum";
    ?>
</body>
</html>z