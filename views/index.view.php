<?php

// Production environment error levels
error_reporting(0);
ini_set('display_errors', '0');

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


<!--slider-->
<div class="slideshow-container">
        <div class="mySlides">
            <img src="images/vinesassortedrose.jpg" alt="Image 1">
        </div>

        <div class="mySlides">
            <img src="images/s2.jpg" alt="Image 2">
        </div>

        <div class="mySlides">
            <img src="images/deciduouspissardii.png" alt="Image 3">
        </div>
    </div>

                                                        <!--js for slideshow-->
                                                        <script>
        let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    const slides = document.getElementsByClassName("mySlides");

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slideIndex++;

    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "block";

    setTimeout(showSlides, 5000); // Change image every 5 seconds (5000ms)
}

    </script>



<!--product categories-->

<div class="content-wrap content">
<div class="cards">
<div class="card">
<img src="images/japanesemaplesbanner.jpg" width="200" height="200" alt="Image 1">
<div class="card-text">
<h2>Japenese Maples</h2>
</div>
</div>

<div class="card">
<img src="images/deciduousbanner.jpg" width="200" height="200" alt="Image 2">
<div class="card-text">
<h2>Deciduous</h2>
</div>
</div>
<?php
// Error Log
// $errorMessage = "Error message: Something is incorrect with the 'Deciduous' part.";
// error_log($errorMessage, 3, "http://localhost/dgl123/index.php/error.log");
?>

<div class="card">
<img src="images/evergreenbanner.jpg" width="200" height="200" alt="Image 3">
<div class="card-text">
<h2>Evergreen</h2>
</div>
</div>  
</div>
<div class="btn-container">
<a href="products.php" class="btn">See All</a>
</div>
</div>

<!--what we offer-->

<div class="content whatweoffer">
<h1>What we offer</h1>
<p>
We offer products such conifers,evergreen, vines, grasses, edibles and bamboos.Apart from plants and trees, we offer GIFT card certificates and Delivery serives as well.
</p>
<a href="services.php">Click here to know more</a>
</div>

<?php
// Manual Breakpoint
//exit("Breakpoint here!");
?>
<!--Help-->

<div class="help content" >
<div class="help-text">
<h1>We Are Here to Help You</h1>
<p>If you have any questions or need assistance, feel free to reach out to us. Our team is ready to assist you.</p>
</div>
<div class="search-bar">
    <form method="POST" action="question_submit.php">
        <input type="text" placeholder="Ask a question here" name="question">

        <?php
            // Dump the Variables
            //$exQuestion = "How can we help you?";
            //var_dump($exQuestion);
            // Result: string(20) "How can we help you?"
            ?>

        <button class="helpbutton" type="submit">Submit</button>
    </form>
</div>
</div>

<!--our story-->

<div class="ourstory content">
<h1>Our Story</h1>
<h2>Welcome to Outback Nursery & Garden Centre
6016 Headquarters Road, Courtenay BC V9J 1M7</h2>
<p>  Outback Nursery is one of the largest garden centres on Vancouver Island.   Our nursery is situated on a  6 acre property and offers 5 overflowing greenhouses (30x170ft); almost 23,000 square feet.
Outback Nursery began in 1998-1999 when our parents retired to the island from Aldergrove. They asked if we'd be interested in joining them and then purchased this  heavily treed property. We began clearing some trees and settled into country life trying our hand at raising some turkeys and pigs as well as growing some hedging and conifers. We joined the Farmer's Market, then as our inventory expanded we began running a spec truck down island stopping here and there to show our quality product to potential customers.

Little by little the property was cleared and one by one the greenhouses and irrigation zones increased to what you see today. In the beginning we were limited to wholesale and landscape clientele, then somewhere along the way interest in our nursery grew and we opened to the public.

</p>
</div>

<!--reviews-->

 
<h1 class="reviewh1 content" style="margin-bottom: -90px;">Our recent reviews</h1>
    <div class="container content">
    <?php
    // // Stack Trace
    // try {
    //     $reviewText = "For the past eight years, our loyalty has been unwavering towards Outback, a family-owned nursery nestled on Vancouver Island. Their profound passion for cultivating vibrant plants, especially Japanese maples, has captivated us. Annette's invaluable expertise guides us in selecting the perfect specimens. The nursery's commitment to maintaining healthy stock, along with their warm and personalized service, keeps us coming back. What's more, their fair prices have made our journey towards creating a beautiful garden not only delightful but also affordable.";
    //     $nonExistentMethod();
    //     echo '<div class="block">
    //             <div class="text">
    //                 <p>' . $reviewText . ' <strong>Don and Michael</strong></p>
    //             </div>
    //         </div>'; 
    // } catch (Exception $e) {
    //    echo '<div class="block">
    //             <div class="text">
    //                 <p>Error occurred: ' . $e->getMessage() . '</p>
    //             </div>
    //         </div>';
    //     echo '<pre>' . $e->getTraceAsString() . '</pre>';
    // }
    ?>
        <div class="block">
            <div class="text">
                <p>
                    For the past eight years, our loyalty has been unwavering towards Outback, a family-owned nursery nestled on Vancouver Island. Their profound passion for cultivating vibrant plants, especially Japanese maples, has captivated us. Annette's invaluable expertise guides us in selecting the perfect specimens. The nursery's commitment to maintaining healthy stock, along with their warm and personalized service, keeps us coming back. What's more, their fair prices have made our journey towards creating a beautiful garden not only delightful but also affordable. <strong>Don and Michael</strong>
                </p>
            </div>
        </div>
        <div class="block">
            <div class="text">
                <p>
                    We recently moved from Vancouver to the Ships Point area to 1.5 acres of garden. Our experience with the family run Outback Nursery over the past several years has been exceptional. Their knowledge of plants combined with their very friendly and helpful service has made our experience enjoyable. Equally important is their excellent pricing, the unique and wide range of plants, shrubs, trees. They also have beautiful rich mulches and soils for the garden. We are very lucky to have found Outback Nursery, the family has helped us make our garden a success.

<strong>Liane and JP Cardinal</strong>
                </p>
            </div>
        </div>
    </div>
</body>
</html>