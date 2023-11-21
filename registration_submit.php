<?php
require('db_connection.php');

$hashPassword = md5($_POST['password']);

if ($_POST['password'] && $_POST['confirm_password'] && ($_POST['password'] == $_POST['confirm_password'])) {

    $insertDataSql = "INSERT INTO `users` (`first_name`,`last_name`,
                        `email`,`username`,`password`)
                     VALUES (
                    '{$_POST['firstName']}',
                    '{$_POST['lastName']}',
                    '{$_POST['email']}',
                    '{$_POST['username']}',
                    '{$hashPassword}'
    )";

    if ($mysqli->query($insertDataSql) != TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    session_start();
    $_SESSION['user_id'] = $mysqli->insert_id;
    $mysqli->close();


    // echo '<script>alert("Data Saved Successfully")</script>';
}




header("Location:index.php");
