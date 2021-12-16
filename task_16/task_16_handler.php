<?php
    session_start();
    require_once("../db_connection.php");
    if(!empty($_FILES))
    {
        $image  = $_FILES["image"];
        $type = array_pop(explode(".", $image["name"]));
        $name = uniqid('img-').'.'.$type;
        move_uploaded_file($image["tmp_name"], "img/$name");

        $sql = "INSERT INTO images(image) VALUE(:img)";
        $statement = $pdo->prepare($sql);
        $statement->execute(["img" => $name]);

        $sql = "SELECT * FROM images";
        $statement = $pdo->query($sql);
        $images = $statement->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION["images"] = $images;
        header("Location: task_16.php");
    }
?>