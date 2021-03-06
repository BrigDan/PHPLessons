<?php

function db()
{
    static $pdo = null;

    if ($pdo) {
        return $pdo;
    }

    $host       = '127.0.0.1';
    $port       = '3306';
    $db         = 'test';
    $username   = 'root';
    $charset    = 'utf8mb4';

    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    return $pdo;
}

function find_user($username, $password)
{
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = db()->query($query);

    return $result->fetch();
}

//$user = find_user('bob', 'colour');
//var_dump($user);

// $user = find_user('i-dont-exist@example.com', 'password');
// var_dump($user);