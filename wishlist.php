<?php
require('db_connection.php');

session_start();

if (!isset($_SESSION['user_id'])) {
    echo "To See The WishList , Please Login First !";
    die;
}


$sql = "SELECT `categories`.`name` as category_name , `products`.`name` as product_name , `products`.`image` FROM `user_wishlist` LEFT JOIN `products` ON `products`.id = `user_wishlist`.`product_id` LEFT JOIN `categories` ON `categories`.id = `products`.`category_id`  WHERE `user_id` = {$_SESSION['user_id']}";

$result = $mysqli->query($sql);

$results = [];

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $results[$row['category_name']][] = ['name' => $row['product_name'], 'image' => $row['image']];
    }
} else {
    echo "Wishlist Is Empty !!!";
}
$mysqli->close();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,800&family=Oswald&family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>


<body>
    <!--subcategory block-->

    <?php
    echo "<div class='global content'>";

    foreach ($results as $category => $products) {

        echo "
        <h1 class='globalh1'> {$category}  </h1>
        <div class='globalcards'>
    ";

        foreach ($products as $product) {

            echo "
            
                <div class='globalcard'>
                    <img src='images/{$product["image"]}' alt='Image 1'>
                    <div class='globalcard-text'>
                        <h2>{$product["name"]}</h2>
                    </div>
                </div>";
        }

        echo "</div>";
    }

    ?>

    </div>

</body>

</html>