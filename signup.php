<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/fcd93b617c.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;300;400&family=Redressed&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <nav class="nav_section">
        <ul class="nav_list">
            <li class="nav_list_item">About Us</li>
            <li class="nav_list_item">Careers Available</li>
        </ul>
    </nav>
    <section>
        <form action="signup_process.php" method="post">
            <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" id="full_name" required><br>
    
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br>
    
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>
    
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>
    
            <input type="submit" value="Submit">
        </form>
        <a href="index.php">Go back</a>
    </section>


</body>
    <footer class="footer_section">
        <ul class="footer_list">
            <li class="footer_list_item"><h1>Customer Service</h1></li>
            <li class="footer_list_item">Privacy Policy</li>
            <li class="footer_list_item">Terms and Conditions</li>
            <li class="footer_list_item">Contact Us</li>
        </ul>
        <ul class="footer_list2">
            <div><li class="footer_list_item"><h1>Connect with us</h1></li></div>
            <li class="footer_list_item"><i class="fa-brands fa-linkedin-in"></i></li>
            <li class="footer_list_item"><i class="fa-brands fa-instagram"></i></li>
            <li class="footer_list_item"><i class="fa-brands fa-twitter"></i></li>
            <li class="footer_list_item"><i class="fa-brands fa-facebook-f"></i></li>
            <!--<li><i class="fa-brands fa-facebook" style="color: black;"></i></li>-->
        </ul>
    </footer>
</html>