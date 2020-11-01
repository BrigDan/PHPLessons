<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="number" name="num1" >
        <br>
        <input type="number" name="num2">
        <br>
        
        <input type="submit" value="Submit">
    </form>
    
    <?php 
    if (isset($_GET["num1"]) && isset($_GET["num2"])){
        $sum = $_GET["num1"] + $_GET["num2"];
        echo "Answer: {$sum}";
    }
    ?>
</body>
</html>