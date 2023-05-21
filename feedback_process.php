<?php
// Connection to the database (assuming you have already created the connection)
$servername = "localhost";
$username = "root";
$password = "mac272";
$dbname = "careerization";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the values submitted through the form
$username = $_POST['username'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// Prepare and execute the SQL statement to insert the feedback into the database
$sql = "INSERT INTO userfeedback (username, email, feedback) VALUES ('$username', '$email', '$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
header("location: feedback.php");
$conn->close();
?>
