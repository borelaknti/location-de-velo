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
		<form>
			<table class="tab" cellpadding="10" cellspacing="5">
				<tr>
					<td><label class="nom"> Nom </label></td> <td><input type="text" name="" size="75"></td>
				</tr>
				<tr>
					<td><label class="nom"> Adresse </label></td> <td><input type="text" name="" size="75"></td>
				</tr>
				<tr>
					<td><label class="nom"> Telephone </label></td> <td><input type="text" name="" size="75"> </td>
				</tr>
				<tr>
					<td><label class="nom"> Numero de carte de credit </label></td> <td><input type="text" name="" size="75" > </td>
				</tr>
			</table>
			<a  href="" class="link" > <button class="buttonInsc" >  Soumettre le formulaire  </button> </a>
			<div class="endbutton">
				 <button  type="reset" class="buttonEnd buttonEnd1" >  Effacer les donnees  </button> 
				<a  href="index.php"  > <button type="button" class="buttonEnd buttonEnd2" >  Retour au menu  </button> </a>
			</div>
		</form>
	</div>
</body>
</html>