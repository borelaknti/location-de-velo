<?php
	
	session_start();
	ini_set('display_errors', 'on');
	ini_set('log_errors', 1);
	ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
	ob_start();
	date_default_timezone_set('America/New_York');
	require_once("includes/functions.php");

	$hauteur = $_SESSION['hauteur'] ?? "" ; // variable pas encore defini
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
	<div class="generalVelo ">
		<div class="titreInsc">
			<h1>Inscrire un nouveau velo</h1>
		</div>
		<?php
            if ($message){
                echo 
                	'<div class="error-message">'.
                    		outputMessage($message).
                    '</div>';
            }
        ?>
		<form id="inscrireVelo" action="formProcessing/inscrire_velo.php" method="post">
			<table class="tabVelo" cellpadding="10" cellspacing="5">
				<tr>
					<td><label class="nom"> Hauteur </label></td> <td><input type="text" name="hauteur" size="30" value="<?php echo htmlentities($hauteur);?>" > <br> <span class="error"> <?php echo $hauteurErr;?></span> </td>
				</tr>
				<tr>
					<td><label class="nom"> Type </label></td> <td><input type="text" name="type" size="30" value="<?php echo htmlentities($type);?>" required> <br> <span class="error"> <?php echo $typeErr;?></span> </td>
				</tr>
				<tr>
					<td><label class="nom"> Prix </label></td> <td><input type="text" name="prix" size="30" value="<?php echo htmlentities($prix);?>" required><br> <span class="error"> <?php echo $prixErr;?></span> </td>
				</tr>
			</table>
			<div class="endbuttonVelo">
				 <button class="buttonVelo" type="submit" name="submit">  Soumettre le formulaire  </button> 
				 <button  type="reset" class="buttonEnd buttonEnd1" >  Effacer les donnees  </button> 
				<a  href="index.php"  > <button type="button" class="buttonEnd buttonEnd2" >  Retour au menu  </button> </a>
			</div>
		</form>
	</div>
</body>
</html>