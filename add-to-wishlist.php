<?php
require('db_connection.php');
session_start();

if (isset($_GET['product_id']) && isset($_SESSION['user_id']) && isset($_GET['product_category_id'])) {
}

if (isset($_GET['product_id']) && isset($_SESSION['user_id']) && isset($_GET['product_category_id'])) {

    $isExist = "SELECT * FROM `user_wishlist` WHERE user_id = {$_SESSION['user_id']} AND product_id = {$_GET['product_id']}";

    $result = $mysqli->query($isExist);

    if ($result->num_rows > 0) {
    } else {
        $sql = "INSERT INTO `user_wishlist` (user_id,product_id) VALUES({$_SESSION['user_id']} , {$_GET['product_id']})";

        $mysqli->query($sql);
    }
    header('Location: ' . 'products-template.php?category_id=' . $_GET['product_category_id']);
}