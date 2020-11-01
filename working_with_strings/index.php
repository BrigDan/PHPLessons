<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $phrase = "Giraffe Academy <br>";
        echo strtolower($phrase) ;
        echo strtoupper($phrase) ;
        
        // Characters in string
        echo $phrase[6]; // e
        echo "<br>";

        // String replacement
        echo str_replace("Giraffe", "Panda", $phrase);
        echo substr($phrase, 8)
    ?>
</body>
</html>