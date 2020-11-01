<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $friends = array("Kevin", "Karen", "Oscar","Jim");
        $friends[1]=400;
        //Add another friend
        $friends[4]="Angela";
        $friends[200]="Alexi";
        echo '<br>';
        echo "Friend 200 = $friends[200]";
        echo '<br>';
        echo "Total: ";
        echo count($friends);
    ?>
</body>
</html>