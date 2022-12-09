<?php
	
	session_start();
	ini_set('display_errors', 'on');
	ini_set('log_errors', 1);
	ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
	ob_start();
	date_default_timezone_set('America/New_York');
	require_once("includes/functions.php");

	$hauteur = $_SESSION['hauteur'] ?? "" ; 
	$type = $_SESSION['type'] ?? "" ;
	$prix = $_SESSION['prix'] ?? "";
	$hauteurErr = $_SESSION['hauteurErr'] ?? "";
	$typeErr = $_SESSION['typeErr'] ?? "";
	$prixErr = $_SESSION['prixErr'] ?? "";
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
				<h1>Inscrire un nouveau velo</h1>
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
			<form id="inscrireVelo" action="formProcessing/inscrire_velo.php" method="post">
			<div class="form-group row mb-3 ">
  				<label  class="col-sm-3 col-form-label offset-md-1"> Hauteur : </label>
  				<div class="col-sm-6">
  					<input type="text" class="form-control " name="hauteur" size="30" value="<?php echo htmlentities($hauteur);?>" required />
  					<?php echo outputError($hauteurErr);?> 
  				</div>
			</div>
			<div class="form-group row mb-3">
  				<label  class="col-sm-3 col-form-label offset-md-1">Type :</label>
  				<div class="col-sm-6">
  					<input type="text" class="form-control" name="type" size="30" value="<?php echo htmlentities($type);?>" required >
  					<?php echo outputError($typeErr);?>
  				</div>
			</div>
			<div class="form-group row mb-3">
  				<label  class="col-sm-3 col-form-label offset-md-1">Prix :</label>
  				<div class="col-sm-6">
  					<input type="text" class="form-control" name="prix" size="30" value="<?php echo htmlentities($prix);?>" required >
  					<?php echo outputError($prixErr);?>
  				</div>
			</div>
			 
			<div class="row offset-md-1 mb-5">
				<button type="submit" class="btn btn-success col-sm-3 p-4 " name="submit">  Soumettre le formulaire  </button>
				<div class="col-sm mt-3">
					<button  type="reset" id="reset" class="btn btn-danger col-sm-3  offset-md-5 " >  Effacer les donnees  </button> 
					<a  href="index.php" class="link btn btn-success col-sm-2  offset-md-1" role="button">   Retour au menu   </a>
				</div>
				
			</div>
			</form>
		</div>
	</div>
	<script >
		$(document).ready(function(){
			$('#reset').click(function(){
				var xhr = new XMLHttpRequest();
				xhr.onload = function(){
					document.location = 'inscrireVelo.php';
				}
				xhr.open('GET','includes/clearSession.php',true);
				xhr.send();
			});
		});
	</script>
</body>
</html>