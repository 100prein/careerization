<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "mac272";
$dbname = "careerization";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$full_name = $_POST["full_name"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];



// Check if username or email already exists
$sql = "SELECT * FROM futureprofessionals WHERE `Username`='$username' OR `Email`='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Username or email already exists
    echo "Username or email already exists.";
} else {
    // Insert new user data into the database
    $sql = "INSERT INTO futureprofessionals (`full_name`, `Username`, `Email`, `Password`) VALUES ('$full_name', '$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        // User registration successful
        echo "User registration successful.";
    } else {
        // Error inserting user data
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
