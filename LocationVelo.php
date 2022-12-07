<?php

	session_start();
	ini_set('display_errors', 'on');
	ini_set('log_errors', 1);
	ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
	ob_start();
	date_default_timezone_set('America/New_York');

include('includes/MySQLDatabase.php');
include('models/Clients.php');
include('models/Velos.php');
include('includes/functions.php');
$clients = new Clients();
$clientList = $clients->findAll();
$velos = new Velos();
$veloList = $velos->findAll();

$guestErr = $_SESSION['guestErr'] ?? "";
$bikeErr = $_SESSION['bikeErr'] ?? "";
$dateErr = $_SESSION['dateErr'] ?? "";
$date = $_SESSION['date'] ?? "";
$guest = $_SESSION['guest'] ?? "";
$bike = $_SESSION['bike'] ?? "";
$message = $_SESSION['message'] ?? "";
 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php include_once "layouts/header.php"; ?>
</head>
<body>
	<div class="container generalInsc ">
		<div class="row justify-content-center mt-3 mb-5">
			<div class="col-sm-11 ">
				<h1>Faire une nouvelle location</h1>
			</div>
		</div>
		<?php
            if ($message){
                echo 
                	'<div class="row big-error">
						<div class="col-sm-9 offset-md-1">
							'.
                    			outputMessage($message).
                    '
						</div>
					</div>';
            }
        ?>		
        <div class="row">
			<form id="location" action="formProcessing\location_velo.php" method="post">
			<div class="form-group row mb-3 ">
  				<label  class="col-sm-3 col-form-label offset-md-1"> Client : </label>
  				<div class="col-sm-6">
  					<select class="form-select form-control-sm" name="guest">
  						<?php 
							
							if(isset($_GET['name']))
							{
								$res = search($_GET['name'],$clientList);
								?>
    								<option selected value="<?php echo $res->id ?> ">  <?php echo $res->name ?> </option>
								<?php
							}
							elseif (!empty($guest)) {
								$res = search($guest,$clientList);
								?>
    								<option selected value="<?php echo $res->id ?> ">  <?php echo $res->name ?> </option>
								<?php
							}
							else
							{
								echo "<option selected disabled> choisir un client</option>";
								if(count($clientList) > 0)
								{ 
									foreach ($clientList as $client)
    								{  ?>
    									<option value="<?php echo $client->id ?> ">  <?php echo $client->name ?> </option>
									<?php }
								}
							}
							?>
					</select>
  					<?php echo outputError($guestErr);?> 
  				</div>
			</div>
			<div class="form-group row mb-3">
  				<label  class="col-sm-3 col-form-label offset-md-1">Velo a louer :</label>
  				<div class="col-sm-6">
  					<select class="form-select form-control-sm" name="bike">
  						<?php 
							if(isset($_GET['id']))
							{
								$rec = search($_GET['id'],$veloList);
								echo '<option selected value="'. $rec->id .'"> '. $rec->type .' </option>';
								
							}elseif(!empty($bike))
							{
								$rec = search($bike,$veloList);
								echo '<option selected value="'. $rec->id .'"> '. $rec->type .' </option>';
							}
							else
							{
								echo "<option selected disabled> choisir un velo</option>";
								if(count($veloList) > 0)
								{ 
									foreach ($veloList as $velo)
    								{  
    									if($velo->available == 1)
    									{
											echo '<option disabled> '.  $velo->type . ', Loue </option>';
									 	} else { 
											echo '<option value="'. $velo->id .'"> '.$velo->type .' </option>';
										}
									}
								}
							}
							
							?>
					</select>
  					<?php echo outputError($bikeErr);?> 
  				</div>
			</div>
			<div class="form-group row mb-3">
  				<label  class="col-sm-3 col-form-label offset-md-1">Jusqu'a :</label>
  				<div class="col-sm-6">
  					<input type="date" class="form-control" id="date" name="date" value="<?php echo htmlentities($date);?>" required />
  					<?php echo outputError($dateErr);?> 
  				</div>
			</div>
			 
			<div class="row mb-5 offset-md-1 ">
				<button type="submit" class="btn btn-success col-sm-3 p-4 " name="submit" >  Soumettre le formulaire  </button>
				<div class="col-sm mt-3 ">
					<button  type="reset" id="reset" class="btn btn-danger col-sm-3  offset-md-5 " >  Effacer les donnees  </button> 
					<a  href="index.php" class="link btn btn-success col-sm-2  offset-md-1" role="button">   Retour au menu   </a>
				</div>	
			</div>

			</form>
		</div>
		<script >
		$(document).ready(function(){
			$('#reset').click(function(){
				var xhr = new XMLHttpRequest();
				xhr.onload = function(){
					document.location = 'LocationVelo.php';
				}
				xhr.open('GET','includes/clearSession.php',true);
				xhr.send();
			});
		});
	</script>
</body>
</html>