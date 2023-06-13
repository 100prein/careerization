<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/fcd93b617c.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;300;400&family=Redressed&display=swap" rel="stylesheet">

	<title>Users</title>
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
		<h1 class="title">Users</h1>
		<section class="view">
				
				<?php
				
				// Database connection
				$conn = mysqli_connect("localhost", "root", "mac272", "careerization");

				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				// SQL query to retrieve data from the users table
				$sql = "SELECT * FROM futureProfessionals";

				// Execute the query and get the result
				$result = mysqli_query($conn, $sql);

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
						echo "<td><a href='edit_user.php?id=" . $row["id"] . "'>Edit</a></td>";
						echo "<td><a href='delete_user.php?id=" . $row["id"] . "'>Delete</a></td>";
						echo "</tr>";
					}
					echo "</table>";
				} else {
					echo "No users found.";
				}

				// Close the database connection
				mysqli_close($conn);
				?>
			
		</section>
		<div class="buttons">
				<a href="admin.php"><p class="button">Go back</p></a>
				<a href="admin_view.php"><p class="button">Admin Managements</p></a>
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
