<?php require_once "formProcessing/liste_facture.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php include_once "layouts/header.php"; ?>
</head>
<body>
	<div class="container-sm   generalInsc ">
		<div class="row justify-content-center mt-3 mb-5">
			<div class="col-sm-11 ">
				<h1>Liste des Factures</h1>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-sm-10 offset-md-1 mb-3 tabclient">
			<?php echo $htmlTable; ?>
			</div>
			<div class="row justify-content-end mb-2 me-2 gx-1">
				<div class="col-sm-2 ">
					<a  href="index.php" class="link btn btn-success  " role="button">   Retour au menu   </a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>