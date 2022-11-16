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
	<div class="container-sm general">
		<div class="row justify-content-center mt-5 mb-5">
			<div class="col-sm-6 ">
				<h1>Système de gestion des Vélo</h1>
			</div>
		</div>
		<div class="row justify-content-between offset-md-1 mb-5">
			<div class="col-sm-4 ">
				<a  href="inscriptionClient.php"  class="btn btn-success col-sm-8 p-4 " role="button" >  Nouveau Client  </a>
			</div>
			<div class="col-sm-4 ">
				<a  href="listeClient.php"  class="btn btn-success col-sm-8 p-4 " role="button" >  Liste des Clients  </a>
			</div>
			<div class="col-sm-4 ">
				<a  href="listeFacture.php"  class="btn btn-success  col-sm-8  p-4 " role="button" >  Facture </a>
			</div>
		</div>
		<div class="row justify-content-between offset-md-1 mb-5">
			<div class="col-sm-4 ">
				<a  href="inscrireVelo.php"  class="btn btn-success col-sm-8 p-4 " role="button" >  Nouveau velo a louer  </a>
			</div>
			<div class="col-sm-4 ">
				<a  href="listeVelo.php"  class="btn btn-success col-sm-8 p-4 " role="button" >  Liste des velo a louer  </a>
			</div>
			<div class="col-sm-4 ">
				<a  href="locationVelo.php"  class="btn btn-success  col-sm-8  p-4 " role="button" >  louer un velo </a>
			</div>
		</div>
	</div>
</body>
</html>