<?php
session_start();
	ini_set('display_errors', 'on');
	ini_set('log_errors', 1);
	ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
	ob_start();
	date_default_timezone_set('America/New_York');
	
	$_SESSION['name'] =  "" ; 
	$_SESSION['adress'] =  "" ;
	$_SESSION['phone'] =  "";
	$_SESSION['cart'] =  "";
	$_SESSION['nameErr'] =  "";
	$_SESSION['adressErr'] =  "";
	$_SESSION['phoneErr'] =  "";
	$_SESSION['cartErr'] =  "";
	$_SESSION['hauteur'] =  "" ; 
	$_SESSION['type'] =  "" ;
	$_SESSION['prix'] =  "";
	$_SESSION['hauteurErr'] =  "";
	$_SESSION['typeErr'] =  "";
	$_SESSION['prixErr'] =  "";
	$_SESSION['message'] =  "";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php include_once "layouts/header.php"; ?>
</head>
<body>
	<div class="general">
		<div class="titre">
			<h1>Système de gestion des Vélos</h1>
		</div>
		<div class="Big-button">
			<div class="button-top">
				<a href="inscriptionClient.php" class="link" > <button class="button1 button " >   Nouveau Client  </button> </a> 
				<a href="listeClient.php" class="link" > <button  class="button2 button ">  Liste des Clients  </button> </a>
				<a href="listeFacture.php" class="link" > <button class="button3 button" >  Facture  </button> </a>
			</div>
			<div class="button-middle">
				<a  href="inscrireVelo.php" class="link" > <button class="button4 button" >  Nouveau velo a louer  </button> </a>
				<a  href="listeVelo.php" class="link" > <button class="button5 button" >  Liste des velo a louer  </button> </a>
				<a  href="locationVelo.php" class="link" > <button class="button6 button" >  louer un velo  </button> </a>
			</div>
		</div>
	</div>
</body>
</html>