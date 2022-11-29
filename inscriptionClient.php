<?php
	session_start();
	ini_set('display_errors', 'on');
	ini_set('log_errors', 1);
	ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
	ob_start();
	date_default_timezone_set('America/New_York');
	require_once("includes/functions.php");


	$name = $_SESSION['name'] ?? "" ; 
	$adress = $_SESSION['adress'] ?? "" ;
	$phone = $_SESSION['phone'] ?? "";
	$cart = $_SESSION['cart'] ?? "";
	$nameErr = $_SESSION['nameErr'] ?? "";
	$adressErr = $_SESSION['adressErr'] ?? "";
	$phoneErr = $_SESSION['phoneErr'] ?? "";
	$cartErr = $_SESSION['cartErr'] ?? "";
	$message = $_SESSION['message'] ?? "";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php include_once "layouts/header.php"; ?>
</head>
<body>

	<div class="container-sm generalInsc ">
		<div class="row justify-content-center mt-3 mb-5">
			<div class="col-sm-11 ">
				<h1>Inscrire un nouveau client</h1>
			</div>
		</div>
		<?php
            if ($message){
                echo 
                	'<div class="row big-error">
						<div class="col-sm-9 offset-md-1">
							'.
                    			outputError($message).
                    '
						</div>
					</div>';
            }
        ?>
				<div class="row">
			<form id="inscriptionClient" action="formProcessing/inscription_client.php" method="post">
			<div class="form-group row mb-3 ">
  				<label  class="col-sm-3 col-form-label offset-md-1"> Nom : </label>
  				<div class="col-sm-6 ">
  					<input type="text" class="form-control " id="name" name="name"  value="<?php echo htmlentities($name);?>" required />
  					 <?php echo outputError($nameErr);?> 
  				</div>
			</div>
			<div class="form-group row mb-3">
  				<label  class="col-sm-3 col-form-label offset-md-1">Adresse :</label>
  				<div class="col-sm-6">
  					<input  class="form-control" id="adress" type="text" name="adress"  value="<?php echo htmlentities($adress);?>" required / >
  					<?php echo outputError($adressErr);?></p>
  				</div>
			</div>
			<div class="form-group row mb-3">
  				<label  class="col-sm-3 col-form-label offset-md-1">Telephone :</label>
  				<div class="col-sm-6">
  					<input  class="form-control" id="phone" type="text" name="phone"  value="<?php echo htmlentities($phone);?>" placeholder=" Sous la forme 12453628496" required / >
  					<?php echo outputError($phoneErr);?> </p>
  				</div>
			</div>
			<div class="form-group row mb-5">
  				<label  class="col-sm-3 col-form-label offset-md-1">Numero de carte de credit :</label>
  				<div class="col-sm-6">
  					<input  class="form-control" id="cart" type="text" name="cart"  value="<?php echo htmlentities($cart);?>"  placeholder=" Sous la forme 1245362849653215" required / >
  					<?php echo outputError($cartErr);?> </p>
  				</div>
			</div>
			 
			<div class="row offset-md-1">
				<button type="submit" name="submit" class="btn btn-success col-sm-3 p-4 " >  Soumettre le formulaire  </button>
			</div>
			<div class="row justify-content-end mb-5 me-2 gx-1">
				<button  type="reset" class="btn btn-danger col-sm-2 " >  Effacer les donnees  </button> 
				<a  href="index.php" class="link btn btn-success col-sm-2 offset-md-1 " role="button">   Retour au menu   </a>
			</div>
			</form>
		</div>
	</div>
</body>
</html>