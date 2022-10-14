<?php require_once "formProcessing/liste_client.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php include_once "layouts/header.php"; ?>
</head>
<body>
	<div class="generalInsc ">
		<div class="titreInsc">
			<h1>Liste des clients</h1>
		</div>
		<div class="tabclient">
			<?php echo $htmlTable; ?>
		</div>		
		<div class="legend">
			<i class='fas fa-plus '></i> <label> :nouvelle location de velo </label> <br> <br>
			<i class='fas fa-trash'></i><label> :supprimer </label>
		</div>
		<div class="endbutton">
			<a  href="index.php"  > <button type="button" class="buttonEnd buttonEndlist" >  Retour au menu  </button> </a>
		</div>
	</div>
</body>
</html> 