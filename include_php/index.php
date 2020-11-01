<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $title="My first post";
    $author = "Mike";
    $wordCount = 400;
    include "article-header.php";
    include "useful-tools.php";
    echo sayHi("Kacper");
    ?>
</body>
</html>