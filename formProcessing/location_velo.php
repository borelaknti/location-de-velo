<?php
	session_start();
	ini_set('display_errors', 'on');
	ini_set('log_errors', 1);
	ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
	ob_start();
	date_default_timezone_set('America/New_York');
	require_once("../includes/functions.php");
	require_once("../models/Rentals.php");

	$message = "";
	$_SESSION['guest']='';
	$_SESSION['bike']='';
	$_SESSION['date']= '';
	$_SESSION['guestErr'] = $_SESSION['bikeErr'] = $_SESSION['dateErr']='';

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$guest = "";
		$bike = "";
		$date = "";
		if(isset($_POST['submit']))
		{
			$guest = trim($_POST['guest']);
			$bike = trim($_POST['bike']);
			$date = trim($_POST['date']);

			if (empty($guest)) {
            $_SESSION['guestErr'] = " Le client est obligatoire";
        	}else {
        		$_SESSION['guest'] = cleanUpInputs($guest);
        	} 
            if(empty($bike)){
            	$_SESSION['bikeErr'] =  " Le velo est obligatoire";
            }else
            {
            	$_SESSION['bike'] = cleanUpInputs($bike);
            }
            if(empty($date)){
            	$_SESSION['dateErr'] =  " La date est obligatoire";
            }else
            {
            	$_SESSION['date'] = cleanUpInputs($date);
            	$dt = time();
            	$dt = date("Y-m-d", $dt); // formater la date dans un format precis

            	if($dt >= $date)
            	{
            		$_SESSION['dateErr'] = $_SESSION['dateErr']." La date est inferieur a la date d'aujourd'hui";
            	}
            }

            if(empty($message) && empty($_SESSION['guestErr']) && empty($_SESSION['bikeErr']) && empty($_SESSION['dateErr']))
            {
            	$rentals = new Rentals();
            	$rentalsArray = $rentals->createRentalArray($guest,$bike,$date);
            	
            	$result = $rentals->createRentals($rentalsArray);
            	$res = $rentals->updateVelo($bike);

            	if($result['success'] && $res['success']){
            		redirect_to("/listeFacture.php");
            	}
            	else
            	{
            		$message = "erreur de location du velo";
            		$_SESSION['message'] = $message;
            		redirect_to("/LocationVelo");
            	}

            }
            else{

            	$message = "erreur de location du velo";
            	$_SESSION['message'] = $message;
            	redirect_to("/LocationVelo");
            }
		}
	}
?>