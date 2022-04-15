<?php
    $driver = "mysql";
    $host = "localhost";
    $db_name = "users";
    $db_user = "mysql";
    $db_password = "mysql";
    $charset = "utf8";

    $dsn ="$driver:host=$host;dbname=$db_name;charset=$charset";

    $pdo = new PDO($dsn, $db_user, $db_password);
?>