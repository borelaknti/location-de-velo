<?php require_once "formProcessing/liste_facture.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php include_once "layouts/header.php"; ?>
</head>
<body>
	<div class="generalInsc ">
		<div class="titreInsc">
			<h1>Liste des factures</h1>
		</div>
		<div class="tabclient">
			<?php echo $htmlTable; ?>
		</div>
		<div class="endbutton">
			<a  href="index.php"  > <button type="button" class="buttonEnd buttonEndlist" >  Retour au menu  </button> </a>
		</div>
	</div>
</body>
</html>