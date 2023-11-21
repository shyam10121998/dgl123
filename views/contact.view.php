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
  
                                                         <!--banner-->
    <img class="banner" src="images/360view.jpg" width="100%" height="600" alt="360 degree view of the outback nursery image">

                                                        <!--contact page details-->

     <div class="opening-hours">
        <p class="open-text">We are OPEN Every Day</p>
        <p class="hours">(including Statutory holidays)</p>
        <p class="hours">9am - 5pm</p>
    </div>

    <h1 class="contacth1">Contact Us</h1>
    <form action="process_form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" placeholder="Your Phone" required>

        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" rows="4" placeholder="Your Comment" required></textarea>

        <input type="submit" value="Submit">
    </form>
    
    <div class="contact-section">
        <div class="contact-left">
            <img src="images/contactusaddress.jpg" alt="Google Map Image">
        </div>
        <div class="contact-right">
            <h2>Address:</h2>
            <p>6016 Headquarters Rd</p>
            <p>Courtenay, British Columbia</p>
            <p>V9J 1M7, Canada</p>

            <h2>Email:</h2>
            <p>info@outbacknursery.ca</p>

            <a href="https://www.google.com/maps/dir/49.6781384,-125.0028384/outback+nursery/@49.715096,-125.0609724,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x548810dc18bfe329:0xa080148546db78f5!2m2!1d-125.0509368!2d49.7520324?entry=ttu" class="find-us-link" target="_blank">Find Us</a>
        </div>
    </div>
  
</body>
</html> 