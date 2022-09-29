
<?php 

session_start();

include('config.php');
include('byds-db.php');

if ( isset($_POST['login'])) {
	// removes backslashes
    $username = stripslashes($_POST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn, $username);
	//
	$username = htmlentities(htmlspecialchars($_POST['username']));

    $password = stripslashes($_POST['password']);
	$password = htmlentities(htmlspecialchars( $_POST['password']));
    $password = mysqli_real_escape_string($conn, $password);

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: ../includes/akwaba.php");

		# code...
	} else {
		echo "<script>alert('Identifiant ou Mot de passe Incorrect ! Veuillez Réessayer S'il vous plait.') </script>";
		# code...
	}
	# code...
}

?>

