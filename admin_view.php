<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
		}
		th {
			background-color: #ddd;
		}
	</style>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Admins</h1>

<?php

// Database connection
$conn = mysqli_connect("localhost", "root", "mac272", "careerization");

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// SQL query to retrieve data from the users table
$sql_admin = "SELECT * FROM admin_account";

// Execute the query and get the result
$result = mysqli_query($conn, $sql_admin);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
	// Display the table
	echo "<table>";
	echo "<tr>";
	echo "<th>Full Name</th>";
	echo "<th>Username</th>";
	echo "<th>Email</th>";
	echo "<th>Password</th>";
	echo "<th>Edit</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	// Loop through each row of the result
	while ($row = mysqli_fetch_assoc($result)) {
		// Display the row data in the table
		echo "<tr>";
		echo "<td>" . $row["full_name"] . "</td>";
		echo "<td>" . $row["username"] . "</td>";
		echo "<td>" . $row["email"] . "</td>";
		echo "<td>" . $row["password"] . "</td>";
		echo "<td><a href='edit_admin.php?id=" . $row["id_admin"] . "'>Edit</a></td>";
		echo "<td><a href='delete_admin.php?id=" . $row["id_admin"] . "'>Delete</a></td>";
		echo "</tr>";
	}
	echo "</table>";
} else {
	echo "No users found.";
}

// Close the database connection
mysqli_close($conn);
?>
<a href="view.php">Go back</a>
</body>

