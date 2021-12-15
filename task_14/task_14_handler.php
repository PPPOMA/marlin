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
            $_SESSION["id"] = $result["id"];
            $_SESSION["success_message"] = "Вы успешно авторизованы";
            header("Location: task_14.php");
        }
    }
?>