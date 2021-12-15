<?php
    session_start();
    if($_POST)
    {
        $_SESSION["count"] += 1;
        header("Location: task_13.php");
    }
?>