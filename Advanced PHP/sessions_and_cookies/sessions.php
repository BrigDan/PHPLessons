<?php   session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="sessions.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <?php
        $_SESSION["username"] = "admin";
        echo $_SESSION["username"];
    ?>
</body>
</html>