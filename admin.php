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
    <title>Welcome</title>
</head>
<body>
<nav class="nav_section">
        <ul class="nav_list">
            <li class="nav_list_item"><a href="welcome.php">Home</a></li>
            <li class="nav_list_item"><a href="about.php">About Us</a></li>
            <li class="nav_list_item"><a href="careerlists.html">Careers Resources</a></li>
            <li class="nav_list_item"><a href="contact.php">Contact Us</a></li>
            <li class="nav_list_item"><a href="account.php">Account</a></li>
            <li class="nav_list_item"><a  href="logout.php?logout">logout</a></li>
        </ul>
    </nav>
    <section class="main">
        <section class="intro_section">
            <div>
                <h1 class="title">Welcome to Careerization</h1>
                <h3>We are here to help you find your career, provide you with steps and suggestions for you to become professional!</h3>
            </div>
            
            <section class="event_section">
              <div class="event_container">
                <div class="event_item">
                  <img src="./src/distribution.png"/>
                  <h3>Wholesale and Distribution</h3>
                  <p><a class="button" href="party.html">Details</a></p>
                </div>
                <div class="event_item">
                  <img src="./src/chemical.png"/>
                  <h3>Chemicals</h3>
                  <p><a class="button" href="party.html">Details</a></p>
                </div>
                <div class="event_item">
                  <img src="./src/energy.png"/>
                  <h3>Energy and Utilities</h3>
                  <p><a class="button" href="soccer.html">Details</a></p>
                </div>
                <div class="event_item">
                  <img src="./src/insurance.png"/>
                  <h3>Insurance</h3>
                  <p><a class="button" href="soccer.html">Details</a></p>
                </div>
                <div class="event_item">
                  <img src="./src/mining.png"/>
                  <h3>Mining and Metals</h3>
                  <p><a class="button" href="soccer.html">Details</a></p>
                </div>
              </div>
             </section>
        </section>

        <section class="signing_section">
                <p class="other_btn"><a href="logout.php?logout">Logout</a></p>
                <p class="other_btn"><a href="index.php">Go back</a></p>
                <p class="other_btn"><a href="view.php">Management</a></p>
                <p class="other_btn"><a href="feedback.php">Feedback</a></p>
        </section>
        
    </section>
    <!--<section class="main">
        <div class="intro_section">
            <div>
                <h1>Welcome to Careerization!</h1>
                <a href="logout.php?logout">Logout</a>
                <a href="index.php">Go back</a>
                <p class="other_btn"><a href="view.php">Management</a></p>
                <p class="other_btn"><a href="feedback.php">Feedback</a></p>
            </div>
            <div>
               
            </div>
        </div>
        
    </section>-->
    


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