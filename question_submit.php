<?php

require('./db_connection.php');

$question = $_POST['question'];

session_start();
if (isset($_SESSION['user_id'])) {

    if ($question) {
        $created_at = time();

        $insertQuestionSql = "INSERT INTO `questions` (`question`,`created_at`,`user_id`) VALUE ('{$question}' , $created_at , {$_SESSION['user_id']})";

        $mysqli->query($insertQuestionSql);

        header("Location:index.php");
    }
} else {

    header("Location:login.php");
}