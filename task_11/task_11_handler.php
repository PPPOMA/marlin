<?php
    session_start();
    require_once("../db_connection.php");

    $sql = "SELECT * FROM users WHERE email = :email";
    $statement = $pdo->prepare($sql);
    $statement->execute(["email" => $_POST["email"]]);
    $check_email = $statement->fetch(PDO::FETCH_ASSOC);
    if($check_email)
    {
        $_SESSION["error_message"] = "Этот эл адрес уже занят другим пользователем";
        header("Location: task_11.php");
    }
    else
    {
        $sql = "SELECT * FROM users WHERE  username = :username";
        $statement = $pdo->prepare($sql);
        $statement->execute(["username" => $_POST["username"]]);
        $check_username = $statement->fetch(PDO::FETCH_ASSOC);
        if($check_username)
        {
            $_SESSION["error_message"] = "Это имя пользователя уже занято другим пользователем";
            header("Location: task_11.php");
        }
        else
        {
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, email, password) VALUE (:username, :email, :password)";
            $statement = $pdo->prepare($sql);
            $statement->execute([ "username" => $_POST["username"], "email" => $_POST["email"], "password" => $password]);
            header("Location: task_11.php");
        }
    }
?>