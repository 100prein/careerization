<?php
// Include config file
require_once "config.php";
 
// Check if user id exists
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Prepare a delete statement
    $sql = "DELETE FROM futureProfessionals WHERE id = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: view.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conn);
} else{
    // User id was not found. Redirect to landing page
    header("location: view.php");
    exit();
}
?>