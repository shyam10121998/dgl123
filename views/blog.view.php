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
                                            <!--blog-->       

                                            <?php

$blogSql = "SELECT * FROM `blogs`";

$results = $mysqli->query($blogSql);


?>

<img class="banner" src="images/annetteblogbanner.jpg" width="100%" height="500">

<h1 class="blogh1 content">The following lists were written and published (Comox Valley Record) by Annette (2018).
    We hope they provide a great reference when planning your outdoor spaces.</h1>


    <?php

while ($row = $results->fetch_assoc()) {
    if ($row['id'] % 2 != 0) {
        echo "  <div class='section content'>
            <div class='image'>
                <img src='images/{$row['image']}' alt='Image 1'>
            </div>
            <div class='text'>
                <h3 class='blogh3'>{$row['title']}</h3>
                <p>{$row['description']}</p>
                <a href='{$row['link']}' class='button'>Read Full</a>
            </div>
        </div>";
    } else {

        echo "  <div class='section content'>
            <div class='text'>
                <h3 class='blogh3'>{$row['title']}</h3>
                <p>{$row['description']}</p>
                <a href='{$row['link']}' class='button'>Read Full</a>
            </div>
            <div class='image'>
                <img src='images/{$row['image']}' alt='Image 2'>
            </div>
        </div> ";
    }
}

?>

</body>
</html>