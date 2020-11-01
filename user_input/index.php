<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        Name: <input type="text" name="username">
        <br><br>
        Age: <input type="text" name="age">
        <br><br>

        <input type="submit"> 
    </form>
    <br>
    <?php
        if(isset($_GET['username']) && isset($_GET['age'])) {
        $username = $_GET["username"];
        $age = $_GET["age"];
        echo ("your name is $username and you are $age years old") ;   
        }
    ?>
</body>
</html>