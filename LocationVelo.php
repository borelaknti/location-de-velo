<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php include_once "layouts/header.php"; ?>
</head>
<body>
	<div class="generalVelo ">
		<div class="titreInsc">
			<h1>Faire une nouvelle location </h1>
		</div>
		<form>
			<table class="tabVelo" cellpadding="10" cellspacing="55">
				<tr>
					<td><label class="nom"> Client </label></td> 
					<td>
						<select id="" name="">
							<option selected disabled> choisir un client</option>
							<option value="je"> je </option>
							<option value="tu"> tu </option>
						</select> 
					</td>
				</tr>
				<tr>
					<td><label class="nom"> Velo a louer </label></td> 
					<td>
					<select id="" name="">
							<option selected disabled> choisir un velo</option>
							<option value="je" disabled> je,louer </option>
							<option value="tu"> tu,disponible </option>
					</select>  
				</td>
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