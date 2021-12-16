<?php
    session_start();

    require_once ("../db_connection.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE email = :email";
    $statement = $pdo->prepare($sql);
    $statement->execute(["email" => $email]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    if (!$result)
    {
        $_SESSION["error_message"] = "Неверный логин или пароль";
        header("Location: task_14.php");
    }
    else
    {
        $hash = password_verify($password, $result["password"]);
        if(!$hash)
        {
            $_SESSION["error_message"] = "Неверный логин или пароль";
            header("Location: task_14.php");
        }
        else
        {
            $_SESSION["username"] = $result["username"];
            header("Location: ../task_15/task_15.php");
        }
    }
?>