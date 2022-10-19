<?php

	$hauteur = $_SESSION['hauteur'] ?? "" ; // variable pas encore defini
	$type = $_SESSION['type'] ?? "" ;
	$prix = $_SESSION['prix'] ?? "";
	$hauteurErr = $_SESSION['nameErr'] ?? "";
	$typeErr = $_SESSION['adressErr'] ?? "";
	$prixErr = $_SESSION['phoneErr'] ?? "";

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
		<form id="inscrireVelo" action="formProcessing/inscrire_velo.php" method="post">
			<table class="tabVelo" cellpadding="10" cellspacing="5">
				<tr>
					<td><label class="nom"> Hauteur </label></td> <td><input type="text" name="hauteur" size="30" value="<?php echo htmlentities($hauteur);?>" required ></td>
					<span class="error"> <?php echo $hauteurErr;?></span>
				</tr>
				<tr>
					<td><label class="nom"> Type </label></td> <td><input type="text" name="type" size="30" value="<?php echo htmlentities($type);?>" required></td>
					<span class="error"> <?php echo $typeErr;?></span>
				</tr>
				<tr>
					<td><label class="nom"> Prix </label></td> <td><input type="text" name="prix" size="30" value="<?php echo htmlentities($prix);?>" required> </td>
					<span class="error"> <?php echo $prixErr;?></span>
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