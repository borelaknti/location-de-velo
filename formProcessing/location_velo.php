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
	$_SESSION['guestErr'] = $_SESSION['bikeErr'] = $_SESSION['date']=""  ;

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
            $_SESSION['guestErr'] = "* Le client est obligatoire";
        	} 
            if(empty($bike)){
            	$_SESSION['bikeErr'] =  "* Le velo est obligatoire";
            }
            if(empty($date)){
            	$_SESSION['dateErr'] =  "* La date est obligatoire";
            }

            if(empty($message) && empty($_SESSION['guestErr']) && empty($_SESSION['bikeErr']) && empty($_SESSION['dateErr']))
            {
            	$rentals = new Rentals();
            	$rentalsArray = $rentals->createRentalArray($guest,$bike,$date);

            	$result = $rentals->createRentals($rentalsArray);
            	//die(var_dump($result));
            	$res = $rentals->updateVelo($bike);
            	//die(var_dump($res));
            	if($result['success'] && $res['success']){
            		redirect_to("/factureVelo.php");
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