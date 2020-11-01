<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="email" placeholder="E_mail">
    <br>
    <input type="text" name="uid" placeholder="Username">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br>
    <button type="submit" name="submit"> Sign up </button>
    </form>
    <?php
        // $data = "Admin";
        // // Create a template
        // $sql = "SELECT * FROM users WHERE user_uid=? AND user_first=?;"; 
        // // Prepared statement
        // $stmt = mysqli_stmt_init($conn);
        // // prepare the prepared statemnt
        // if (!mysqli_stmt_prepare($stmt, $sql)) {
        //     echo "SQL Statement failed";
        // } else{
        //      // Bind Parameters to the placeholder
        //      mysqli_stmt_bind_param($stmt, "s", $data);
        //      // RUn paramaters inside
        //      mysqli_stmt_execute($stmt);
        //      $result = mysqli_stmt_get_result($stmt);
        //         while ($row = mysqli_fetch_assoc($result)) {
        //             echo $row['user_uid'] . "<br>";
        //         }
        // }
     ?>
</body>
</html>