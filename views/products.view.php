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

<?php
$sql = "SELECT * FROM categories";
$result = $mysqli->query($sql);

$results = $result->fetch_all(MYSQLI_ASSOC);

?>

<body>

    <div class="note content">
        <h1>Please note</h1>
        <p>We publish this list as a representation of what might be in stock at any given time throughout the year.  

            It is not an active or current availability as some items sell out within a day.
            
            Fluctuations to inventory occur frequently throughout the season.
            
            Depending on the scope of your project, we will always be able to recommend at least one suitable in-stock alternative to fit your space.
            
            We hope our list provides a good reference as you plan and prepare your planting project.
            
            <strong>PLEASE VISIT </strong>the store to check current inventory levels!
            
            <strong>THANK YOU!</strong></p>

        <br>                                
    <p> <strong>PEAK SEASON</strong> for fruit trees is mid March through mid April.

<strong>PEAK SEASON</strong> for hedging is April and September - especially for the specimes we grow and dig from our  <strong>TREE FARM</strong>.  

We try to keep multiple sizes in stock.</p>

<p>Blueberry shrubs -<strong>starting at $15</strong> -  Reka, Duke or Blue Crop varieties
Raspberry canes -<strong>$15</strong></p>

<p> 
Hazelnuts - EFB (Eastern Filbert Blight) resistant - new varieties - Jefferson, Eta and Theta.  Our trees are mature and producing nuts.
</p>

    </div>

                                                <!--season's special-->

   
    <div class="content-wrap content">
        <h1 class="seasonh1">Season's special</h1>
        <div class="cards">
            <div class="card">
                <img src="images/clemantis.jpg"  width="250" height="300" alt="Image 1">
                <div class="card-text">
                    <h2>Clematis</h2>
                </div>
            </div>
            
            <div class="card">
                <img src="images/autumnmoon.jpg"  width="250" height="300" alt="Image 2">
                <div class="card-text">
                    <h2>Autumn Moon</h2>
                </div>
            </div>

            <div class="card">
                <img src="images/greencascade.jpg"  width="250" height="300" alt="Image 3">
                <div class="card-text">
                    <h2>Green Cascade</h2>
                </div>
            </div> 
        </div> 
    </div>

                                                    <!--product categories-->

    <h1 style="margin-bottom: -40px;">
        product categories 
    </h1>
    <div class="category-container content">
    
    <?php

        foreach ($results as $result) {

            echo "
                <a href='products-template.php?category_id={$result['id']}' class='category-link'>
                    <div class='category-card'>
                        <div class='category-text'>
                            <h2>{$result['name']}</h2>
                        </div>
                        <div class='category-image'>
                            <img src='images/{$result['image']}' alt='Conifers'>
                        </div>
                    </div>
                </a>
            ";
        }

        ?>
    
    </div>
    
</body>
</html>