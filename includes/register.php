<!--      
Author Dominique SORO
Location : Abidjan, Ivory coast
contac@byds.fr

-->
<?php 

include('register_byds.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Inscription</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../byds.css'>
    <script src='../byds.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>



    <div class="box-reg">
		<form autocomplete="off" method="POST" action="">
			<a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
			<i></i>
			<h2>S'incrire</h2>
			<div class="inputBox">
				<input name="username" type="text" required="required">
				<span>Identifiant</span>
				<i></i>
			</div>

            <div class="inputBox">
				<input name="email" type="email" required="required">
				<span>E-mail</span>
				<i></i>
			</div>

			<div class="inputBox">
				<input id="myPassword" name="password" type="password" required="required" >
				<span>Mot de passe</span>
				<i></i>
			</div>

            <div class="inputBox">
				<input id="myPassword" name="cpassword" type="password" required="required">
				<span>Confirmer Mot de passe</span>
				<i></i>
			</div>
            
            <div class="checkbox-1">
                <!-- An element to toggle between password visibility -->
				<!-- Un élément pour basculer entre la visibilité du mot de passe -->
                <input class="checkbox" type="checkbox" id="checkbox" onclick="myFunction()"><span class="checkbox-w">Voir Mot de passe</span>
            </div>
			<div class="links">
				<a href="#">Mot de passe oublié ?</a>
				<br><a href="login.php">Se Connecter</a>
			</div>
			<input type="submit" name="register" value="S'incrire">
		</form>
        
	</div>


    <footer>
        <a href="index.php" class="copyright">© byds 2022</a>
    </footer>
</body>
</html>