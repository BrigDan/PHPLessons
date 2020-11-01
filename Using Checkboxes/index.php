<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Apples:  <input type="checkbox" name="fruits[]" value="apples">
        Lemons:  <input type="checkbox" name="fruits[]" value="lemons">
        Limes:  <input type="checkbox" name="fruits[]" value="limes">

        <input type="submit" value="Submit">
    </form>
    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[1];
    
    ?>
</body>
</html>