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
    <style>
        header {
            position: absolute;
            width: 100%;
        }

        footer {
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

    </style>
</head>



<body>
    <div class="registration-container">
        <h2>Registration</h2>
        <form action="registration_submit.php" method="POST">

            <input type="text" name="firstName" placeholder="First Name" style="width: 90%">
            <input type="text" name="lastName" placeholder="Last Name" style="width: 90%">
            <input type="email" name="email" placeholder="Email" style="width: 90%">
            <input type="text" name="username" placeholder="Username" style="width: 90%">
            <input type="password" name="password" placeholder="Password" style="width: 90%">
            <input type="password" name="confirm_password" placeholder="Confirm Password" style="width: 90%">

            <button type="submit" class="button" style="position:center">Submit</a>
        </form>

    </div>
</body>

</html>