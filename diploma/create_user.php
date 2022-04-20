<?php
require_once("db_connection.php");

if(isset($_POST))
{
    if(!empty($_FILES["avatar"]["name"]))
    {
        $name = uniqid().".".end(explode(".", $_FILES["avatar"]["name"])); //отделяет от имени загружаемого файла его расширение и добаляет его к уникальному названию файла
        move_uploaded_file($_FILES["avatar"]["tmp_name"], "img/avatar/".$name); //перемещаем загруженный файл в указанную папку
        $_POST["avatar"] = $name;
    }
    else
    {
        //$_POST["avatar"] = "no_avatar";
    }
    $sql = "INSERT INTO users (login, email, password, role, avatar) VALUE (:login, :email, :password, :role, :avatar)";

    $statement = $pdo->prepare($sql);
    $statement->execute($_POST);
}
else
{
    echo "Что-то пошло не так!";
}

header("Location: /diploma/index.php");
?>