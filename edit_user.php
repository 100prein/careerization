<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "mac272";
$dbname = "careerization";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Update user information in database
    $sql = "UPDATE futureProfessionals SET full_name='$full_name', username='$username', email='$email', password='$password' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "User updated successfully";
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
}

// Get user information based on id
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM futureProfessionals WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "User not found";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" value="<?php echo $row['full_name']; ?>"><br><br>
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $row['username']; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo $row['password']; ?>"><br><br>
        <input type="submit" name="submit" value="Update">
    </form>
    <a href="welcome.php">Go back</a>
</body>
</html>

<?php
// Close database connection
mysqli_close($conn);
?>
