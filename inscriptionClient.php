<?php

	$name = $_SESSION['name'] ?? "" ; // variable pas encore defini
	$adress = $_SESSION['adress'] ?? "" ;
	$phone = $_SESSION['phone'] ?? "";
	$cart = $_SESSION['cart'] ?? "";
	$nameErr = $_SESSION['nameErr'] ?? "";
	$adressErr = $_SESSION['adressErr'] ?? "";
	$phoneErr = $_SESSION['phoneErr'] ?? "";
	$cartErr = $_SESSION['cartErr'] ?? "";
	
	require_once("formProcessing/inscription_client.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php include_once "layouts/header.php"; ?>
</head>
<body>
	<div class="generalInsc ">
		<div class="titreInsc">
			<h1>Inscrire un nouveau client</h1>
		</div>
		<form id="inscription" action="formProcessing/inscription_client.php" method="post">
			<table class="tab" cellpadding="10" cellspacing="5">
				<tr>
					<td><label class="nom"> Nom </label></td> <td><input id="name" type="text" name="name" size="75" value="<?php echo htmlentities($name);?>" required /></td>
					<span class="error"> <?php echo $nameErr;?></span>
				</tr>
				<tr>
					<td><label class="nom"> Adresse </label></td> <td><input id="adress" type="text" name="adress" size="75" value="<?php echo htmlentities($adress);?>" required /></td>
					<span class="error"> <?php echo $adressErr;?></span>
				</tr>
				<tr>
					<td><label class="nom"> Telephone </label></td> <td><input id="phone" type="text" name="phone" size="75" value="<?php echo htmlentities($phone);?>" required /> </td>
					<span class="error"> <?php echo $phoneErr;?></span>
				</tr>
				<tr>
					<td><label class="nom"> Numero de carte de credit </label></td> <td><input id="cart" type="text" name="cart" size="75" value="<?php echo htmlentities($cart);?>" required /> </td>
					<span class="error"> <?php echo $cartErr;?></span>
				</tr>
			</table>
			<button type="submit" name="submit" class="buttonInsc"  >  Soumettre le formulaire  </button> 
			<div class="endbutton">
				 <button  type="reset" class="buttonEnd buttonEnd1" >  Effacer les donnees  </button> 
				<a  href="index.php"  > <button type="button" class="buttonEnd buttonEnd2" >  Retour au menu  </button> </a>
			</div>
		</form>
	</div>
</body>
</html>