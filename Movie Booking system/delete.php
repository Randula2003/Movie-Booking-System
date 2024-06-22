<?php
    // Start session and include configuration file
    session_start();
    include("php/config.php");

    // Check if user is logged in
    if(!isset($_SESSION['valid'])){
        header("Location: index.php");
        exit; // Stop further execution
    }

    // Check if user confirms deletion
    if(isset($_POST['confirm_delete'])){
        $id = $_SESSION['id'];

        // Delete user from database
        $delete_query = mysqli_query($con, "DELETE FROM users WHERE Id=$id");

        if($delete_query){
            // Logout user after deletion
            session_destroy();
            header("Location: index.php");
            exit; // Stop further execution
        } else {
            echo "Error deleting user. Please try again.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Delete Profile</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Delete Profile</header>
            <p>Are you sure you want to delete your profile?</p>
            <form action="" method="post">
                <div class="field">
                    <input type="submit" class="btn" name="confirm_delete" value="Yes, delete my profile">
                    <a href="profile.php"><button type="button" class="btn">Cancel</button></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
