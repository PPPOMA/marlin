<?php
    session_start();
    require_once("../db_connection.php");

    $sql = "SELECT * FROM users WHERE email = :email";
    $statement = $pdo->prepare($sql);
    $statement->execute(["email" => $_POST["email"]]);
    $email = $statement->fetch(PDO::FETCH_ASSOC);
    if($email)
    {
        $_SESSION["error_message"] = "Этот эл адрес уже занят другим пользователем";
        header("Location: task_11.php");
    }
    else
    {
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (email, password) VALUE (:email, :password)";
        $statement = $pdo->prepare($sql);
        $statement->execute(["email" => $_POST["email"], "password" => $password]);
        header("Location: task_11.php");
    }
?>