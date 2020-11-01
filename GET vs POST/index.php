<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- puts the password in the url because of get -->
    <!-- <form action="index.php" method="get"> 
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Submit">
    </form> -->

    <form action="index.php" method="POST"> 
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Submit">
    </form>
    <br><br>

    <?php
        echo $_POST["password"];
    ?>    
</body>
</html>