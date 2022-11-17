<?php
include('includes/MySQLDatabase.php');
include('models/Clients.php');
include('models/Velos.php');
include('includes/functions.php');
$clients = new Clients();
$clientList = $clients->findAll();
$velos = new Velos();
$veloList = $velos->findAll();
//die(var_dump($clientList)); 

$guestErr = $_SESSION['guestErr'] ?? "";
$bikeErr = $_SESSION['bikeErr'] ?? "";
$dateErr = $_SESSION['dateErr'] ?? "";
$date = $_SESSION['date'] ?? "";
$message = $_SESSION['message'] ?? "";


//die(var_dump($res ));
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
			<h1>Faire une nouvelle location </h1>
		</div>
		<?php
            if ($message){
                echo 
                	'<div class=" error-message">'.
                    		outputMessage($message).
                    '</div>';
            }
        ?>

        <!--
           Corrections :
          -  Enlever cellpadding et cellspacing n'est plus utilisé dans le HTML. Ajouter le css dans une classe
       -->
		<form id="location" action="formProcessing\location_velo.php" method="post">
			<table class="tabVelo" cellpadding="10" cellspacing="55">
				<tr>
					<td><label class="nom"> Client </label></td> 
					<td>
						<select id="guest" name="guest">
							
							<?php 
							
							if(isset($_GET['name']))
							{
								$res = search($_GET['name'],$clientList);
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
						<span class="error"> <?php echo $guestErr;?></span> 
					</td>
				</tr>
				<tr>
					<td><label class="nom"> Velo a louer </label></td> 
					<td>
					<select id="bike" name="bike">
							<?php 
							if(isset($_GET['id']))
							{
								$rec = search($_GET['id'],$veloList);
								echo '<option selected value="'. $rec->id .'"> '. $rec->type .' </option>';
								
							}else
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
					<span class="error"> <?php echo $bikeErr ?></span> 
				</td>
				</tr>
				<tr>
					<td>
						<label class="date" for="date">Jusqu'a:</label> 
					</td> 
					<td> 
						<input type="date" id="date" name="date" value="<?php echo htmlentities($date);?>" required />
<!--Corrections :
-   juste mettre le PHP, donc : <?php echo $dateErr;?>
-->
						<span class="error"> <?php echo $dateErr;?></span> 
					</td>
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