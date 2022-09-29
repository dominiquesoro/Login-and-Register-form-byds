
<?php 

session_start();

include('config.php');
include('byds-db.php');

error_reporting(0);


if( isset($_POST['register']) ) {

	// removes backslashes
    $username = stripslashes($_POST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn, $username);
	//
	$username = htmlentities(htmlspecialchars($_POST['username']));

    
    $email    = stripslashes($_POST['email']);
	$email = htmlentities(htmlspecialchars($_POST['email']));
    $email    = mysqli_real_escape_string($conn, $email);

    $password = stripslashes($_POST['password']);
	$password = htmlentities(htmlspecialchars( $_POST['password']));
    $password = mysqli_real_escape_string($conn, $password);

    $cpassword = stripslashes($_POST['cpassword']);
	$cpassword = htmlentities(htmlspecialchars( $_POST['cpassword']));
    $cpassword = mysqli_real_escape_string($conn, $cpassword);


	if ( $password == $cpassword ) {
		$sql = "SELECT * FROM users WHERE username='$username' ";
		$result = mysqli_query($conn, $sql);


		if (!$result->num_rows > 0) {
			$sql ="INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')" ;
			$result = mysqli_query($conn, $sql);


			if ($result) {
				echo "<div class='' style='text-align:center; align-items:center;'><br><img src='../img/ok.svg' style='width:50px; height:50px; text-align:center; align-items:center;'>
                <h3><b>$username</b> votre inscription est un succès.</h3><br/>
                <h3 class='link'>Cliquez sur <a href='../includes/login.php'>Connexion</a> pour se connecter</h3>
                </div>";
				# code... 
			} else {
				echo "<script>alert('Ooooops error, Veuillez réessayer !')</script>";
				# code...
			}

			
		} else {
			echo "<script>alert('Identifiant ou E-mail existe déjà, Veuillez réessayer !')</script>";
			# code...
		}

	} else {
		echo "+<script>alert('Mot de passe non identique, Veuillez réessayer S'il vous plaît !')</script>";
		# code...
	}

}


?>
