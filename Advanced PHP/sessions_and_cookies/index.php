<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // A cookie stays with you for a time limit that we can set, cookies are easier to access than a session therefore usually not critical
    // A session disappears after the website is refreshed in any way but is stored interanally.
    
     // Create a cookie, name, value and timer for expire; - deletes
     setcookie("name", "Kacper", time() - 86400);
    
    // Creating a session
    $_SESSION['name'] = "Kacper";
    ?>
</body>
</html>