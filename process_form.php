<?php

require('./db_connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

if ($name || $email || $phone || $comment) {


    $insertSql = "INSERT INTO `contact_us` (`name`,`email`,`phone`,`comment`) VALUE ('{$name}' ,'{$email}' ,'{$phone}' ,'{$comment}')";

    $mysqli->query($insertSql);
}

header("Location:contact.php");
