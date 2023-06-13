<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Feedback Page</title>
</head>
<body>
        <nav class="nav_section">
        <ul class="nav_list">
            <li class="nav_list_item"><a href="welcome.php">Home</a></li>
            <li class="nav_list_item"><a href="about.php">About Us</a></li>
            <li class="nav_list_item"><a href="careerlists.html">Careers Resources</a></li>
            <li class="nav_list_item"><a href="contact.php">Contact Us</a></li>
            <li class="nav_list_item"><a href="account.php">Account</a></li>
            <li class="nav_list_item"><a href="logout.php?logout">logout</a></li>
        </ul>
    </nav>
    <section class="main">
        <div class="form_input">
            <h1>Feedback</h1>
            <form action="feedback_process.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="feedback">Feedback:</label><br>
                <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea><br><br>

                <input type="submit" value="Submit">
            </form>
            <div class="buttons">
                <a href="admin.php"><p class="button">Go back</p></a><br>
                <a href="view.php"><p class="button">View Accounts</p></a>
            </div>
        </div>
    </section>  
    
</body>
<footer class="footer_section">
        <ul class="footer_list">
            <li class="footer_list_item"><h1>Customer Service</h1></li>
            <li class="footer_list_item"><a href="">Privacy Policy</a></li>
            <li class="footer_list_item"><a href="">Terms and Conditions</a></li>
            <li class="footer_list_item"><a href="">Contact Us</a></li>
        </ul>
        <ul class="footer_list">
            <li class="footer_list_item"><h1>Customer Service</h1></li>
            <li><a href="career.html">Career</a></li>
            <li><a href="help.html">Help</a></li>
            <li><a href="apps.html">Apps</a></li>
            <li><a href="blogs.html">Blogs</a></li>
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
