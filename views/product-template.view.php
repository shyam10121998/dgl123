<?php

$categoryId = $_GET['category_id'];

if ($categoryId) {

    $categoryNameSql = "Select `name` from categories where id = " . $categoryId;

    $categoryName = $mysqli->query($categoryNameSql)->fetch_assoc()['name'];

    $productsSql = "Select * from products where category_id = " . $categoryId;

    $products = $mysqli->query($productsSql);
}

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

    <div class="global content">
        <h1 class="globalh1"><?php echo $categoryName  ?></h1>
        <div class="globalcards">

            <?php

            while ($product = $products->fetch_assoc()) {
                echo "<div class='globalcard'>
                        <img src='images/{$product['image']}' alt='Image 1'>
                        <div class='globalcard-text'>
                            <h2>{$product['name']}</h2>
                        </div>
                    </div>";
            }
            ?>

        </div>
    </div>

</body>

</html>