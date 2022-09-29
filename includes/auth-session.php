<?php



include('config.php');
include('byds-db.php');
//

session_start();
if(!isset($_SESSION["username"])) {
    // removes backslashes
    $username = stripslashes($_POST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn, $username);
	//
	$username = htmlentities(htmlspecialchars($_POST['username']));
    header("Location: ../includes/login.php");
    exit();
    }
?>