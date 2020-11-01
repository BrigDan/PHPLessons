<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="user">
        <input type="submit" value="submit">
    </form>
    
    <?php
        $grades = array(
            "Student1" => "A+",
            "Student2" => "B-",
            "Student3" => "C+",
            "Student3" => "D-"
        );;
        $username = $_POST["user"];
        echo $grades[$username];
    ?>
</body>
</html>