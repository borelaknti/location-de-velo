<?php require_once "formProcessing/liste_velo.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php include_once "layouts/header.php"; ?>
</head>
<body>
	<div class="generalInsc ">
		<div class="titreInsc">
			<h1>Liste des velos a louer</h1>
		</div>
		<div class="tabclient">
			<?php echo $htmlTable; ?>
		</div>
		<div class="legend">
			<i class='fas fa-plus '></i> <label> :nouvelle location de velo </label> <br> <br>
			<i class='fas fa-trash'></i><label> :supprimer </label> <br> <br>
			<i class='fas fa-remove icone1'></i><label> :loue </label> <br> <br>
			<i class='fas fa-check icone2'></i><label> :disponible </label> <br> <br>
			<i class='fas fa-check-circle icone2'></i><label> :remettre disponible </label> <br> <br>
			<i class='fas fa-check-circle '></i><label> :remettre disponible inactive </label>
		</div>
		<div class="endbutton">
			<a  href="index.php"  > <button type="button" class="buttonEnd buttonEndlist" >  Retour au menu  </button> </a>
		</div>
	</div>
</body>
</html>