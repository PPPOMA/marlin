<?php
    session_start();
    require_once("../db_connection.php");

    $sql = "SELECT * FROM task_10 WHERE text = :text";
    $statement = $pdo->prepare($sql);
    $temp = $statement->execute(["text" => $_POST["text"]]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    
    if($result)
    {
        $_SESSION["error_message"] = "Данный текст уже присутствует в таблице";
        header("Location: task_10.php");
    }

    else
    {
        $sql = "INSERT INTO task_10 (text) VALUE (:text)";
        $statement = $pdo->prepare($sql);
        $statement->execute(["text" => $_POST["text"]]);

        $_SESSION["success_message"] = "Текст успешно добавлен в таблицу";
        header("Location: task_10.php");
    }
?>