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
		<form>
			<table class="tabVelo" cellpadding="10" cellspacing="5">
				<tr>
					<td><label class="nom"> Hauteur </label></td> <td><input type="text" name="" size="75"></td>
				</tr>
				<tr>
					<td><label class="nom"> Type </label></td> <td><input type="text" name="" size="75"></td>
				</tr>
				<tr>
					<td><label class="nom"> Prix </label></td> <td><input type="text" name="" size="75"> </td>
				</tr>
			</table>
			<div class="endbuttonVelo">
				<a  href="" class="link" > <button class="buttonVelo" >  Soumettre le formulaire  </button> </a>
				 <button  type="reset" class="buttonEnd buttonEnd1" >  Effacer les donnees  </button> 
				<a  href="index.php"  > <button type="button" class="buttonEnd buttonEnd2" >  Retour au menu  </button> </a>
			</div>
		</form>
	</div>
</body>
</html>