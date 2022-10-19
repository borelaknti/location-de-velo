<?php
	session_start();
	ini_set('display_errors', 'on');
	ini_set('log_errors', 1);
	ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
	ob_start();
	date_default_timezone_set('America/New_York');
	require_once("../includes/functions.php");
	require_once("../models/Clients.php");

	
	if(isset($_GET['id']))
	{
		$clients = new Clients();
		$res = $clients->deleteRental($_GET['id']);
		if($res['success'])
		{
			$result = $clients->deleteClient($_GET['id']);
			if($result['success'])
			{
				redirect_to("/listeClient");
			}else
            {
            	$message = "erreur de suppression du client";
            	$_SESSION['message'] = $message;
           		redirect_to("/listeClient");
           	}

		}
		else
        {
        	$message = "erreur de suppression du client";
           	$_SESSION['message'] = $message;
           	redirect_to("/listeClient");
        }
	}
	else
   	{
    	$message = "erreur de suppression du client";
        $_SESSION['message'] = $message;
        redirect_to("/listeClient");
    }
            	
?>