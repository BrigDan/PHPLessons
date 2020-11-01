<?php
    include "newindex.php";
// Start a session to store the user logged in status
session_start();


$logged_in = false;

$username = 'admin@example.com';
$password = 'password';
//print_r($_SESSION);

// Has the user submitted the form?
if (!empty($_POST)) { //checks if the input fields in the form (login_form.php) are not empty
    if (isset($_POST['username']) && isset($_POST['password'])) {// checks if the user has entered somthing in the field
        if (find_user($_POST['username'], $_POST['password'])) { //checks if the inputs in the form are the same as the assosiated variables $username and $password
          $_SESSION['logged_in'] = true;
        }
    }
}

// Store answer in session
//print_r($_SESSION);

$logged_in = $_SESSION['logged_in'] ?? false;

if ($logged_in) {
    include 'logged_in.php';
}
else {
    include "login_form.php";
}