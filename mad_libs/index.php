<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
    Color: <input type="text" name="color"> <br>
    Plural Noun: <input type="text" name="pluralNoun"> <br>
    noun: <input type="text" name="noun"><br>
    <input type="submit" value="Submit">
    </form>
    <br><br>

    <?php
    if($_GET){
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $noun = $_GET["noun"];
        echo "Roses are {$color} <br>";
        echo "{$pluralNoun} are blue <br>";
        echo "I love {$noun} <br>";
    }
    ?>

</body>
</html>