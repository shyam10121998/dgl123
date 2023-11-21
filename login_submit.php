<?php
require('db_connection.php');

$hashPassword = md5($_POST['password']);

if ($_POST['password'] && $_POST['username']) {

    $checkUserExist = "SELECT `id` from `users` WHERE `username` = '{$_POST['username']}' AND `password` = '{$hashPassword}' LIMIT 1";
    $result = $mysqli->query($checkUserExist);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            session_start();
            $_SESSION['user_id'] = $row['id'];
        }
    } else {
        echo "USER NOT FOUND";
        die;
    }
}




header("Location:index.php");