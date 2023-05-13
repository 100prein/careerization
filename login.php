<?php
// start the session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}

// check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get the form inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // connect to the database
    $conn = mysqli_connect('localhost', 'root', 'mac272', 'careerization');

    // check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // prepare the SQL query
    $sql = "SELECT * FROM futureProfessionals WHERE username = '$username' AND password = '$password'";

    // execute the query
    $result = mysqli_query($conn, $sql);

    // check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        // user found, set session variables and redirect to welcome page
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        // user not found, display error message
        $error_msg = "Invalid username or password";
    }

    // close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    ?>
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
            <li class="nav_list_item">Home</li>
            <li class="nav_list_item">About Us</li>
            <li class="nav_list_item">Careers Available</li>
        </ul>
    </nav>
    <?php if (isset($error_msg)): ?>
        <p><?php echo $error_msg; ?></p>
    <?php endif; ?>
    <section>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>Username:</label>
            <input name="username" type="text"/><br>
            <label>Password:</label>
            <input name="password" type="password" /><br>
            <input name="submit" type="submit" value="Login" />
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