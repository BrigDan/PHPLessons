<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Number: <input type="number" name="Number">
        Power: <input type="number" name="Power">
        <input type="submit" value="Submit">
    </form>
    <?php
        $num = $_POST["Number"];
        $powerOf = $_POST["Power"];
    
        function returnPow($num,$exponent){
            return pow($num,$exponent);
        }
        echo returnPow($num,$powerOf);
    ?>
</body>
</html>