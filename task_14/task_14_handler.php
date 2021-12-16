<?php
    session_start();

    require_once ("../db_connection.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE email = :email";
    $statement = $pdo->prepare($sql);
    $statement->execute(["email" => $email]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if (empty($result))
    {
        $_SESSION["error_message"] = "Неверный логин или пароль";
        header("Location: task_14.php");
        exit;
    }

    $hash = password_verify($password, $result["password"]);
    if(empty($hash))
    {
        $_SESSION["error_message"] = "Неверный логин или пароль";
        header("Location: task_14.php");
        exit;
    }

    $_SESSION["username"] = $result["username"];
    header("Location: ../task_15/task_15.php");
    exit;
?>