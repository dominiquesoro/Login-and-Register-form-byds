<!--      
Author Dominique SORO
Location : Abidjan, Ivory coast
contac@byds.fr
-->
<?php 

include('auth-session.php');

?>





<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AKWABA</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../byds.css'>
    <script src='../byds.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <style>
        .log-s {
            background-color: #ff1616;
            margin: 8px;
            padding: 9px;
            border-radius: 7px;
            color: white;
        }

        .log-s .btn-lo {
            color: white;
        }

        .log-s:hover, .log-s .btn-lo:hover {
            color: #ff1616;
            background-color: white;
            transition: .7s;
        }
    </style>
</head>
<body>





    <div class="akwaba">
        <img src="../img/akwaba.png" alt="">
    </div>
    


    <div class="">
		<h2>Salut <b><?php echo($_SESSION["username"]); ?></b>!</h2><br/>
		<h3>Je suis ravie de vous voir</h3>
	</div>
    <div class="log-s">
        <a href="../includes/logout.php" class="btn-lo" >Déconnexion</a>
    </div>
    <br>
    <br>

    <footer>
        <a href="../index.php" class="copyright">© byds 2022</a>
    </footer>
</body>
</html>