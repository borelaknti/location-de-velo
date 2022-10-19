<?php
	session_start();
	ini_set('display_errors', 'on');
	ini_set('log_errors', 1);
	ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
	ob_start();
	date_default_timezone_set('America/New_York');
	require_once("../includes/functions.php");
	require_once("../models/Velos.php");

	$message = "";
	$_SESSION['hauteur']='';
	$_SESSION['type']='';
	$_SESSION['prix'] = '';
	$_SESSION['hauteurErr'] = $_SESSION['typeErr'] = $_SESSION['prixErr'] =  "";
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$hauteur = "";
		$type = "";
		$prix = "";
		if(isset($_POST['submit']))
		{
			$hauteur = trim($_POST['hauteur']);
			$type = trim($_POST['type']);
			$prix = trim($_POST['prix']);

			

			if (empty($hauteur)) {
            $_SESSION['hauteurErr'] = "* La hauteur est obligatoire";
        	} else {
            	$_SESSION['hauteur'] = cleanUpInputs($name);  //demander apres ce que ca veut dire
            	// check if name only contains letters and whitespace
            	//die(var_dump($_SESSION['name'] ));
            	/*if (!preg_match("/^[a-zA-Z-' ]*$/",$_SESSION['name'])) {
                	$_SESSION['nameErr'] = "* Seules les lettres et les espaces blancs sont autorisés";
           	 	}
            	if (strlen($_SESSION['name']) > 100) {
                	$_SESSION['nameErr'] = "* Le nom doit comporter un maximum de 100 caractères.";
            	}controle de saisi pour prendre que les chiffres*/
            }
            if(empty($type)){
            	$_SESSION['typeErr'] =  "* Le type est obligatoire";
            }
            if (empty($prix)) {
            	$_SESSION['prixErr'] = "* Le prix est obligatoire";
            }

            if(empty($message) && empty($_SESSION['hauteurErr']) && empty($_SESSION['typeErr']) && empty($_SESSION['prixErr']))
            {
            	$velos = new Velos();
            	$velosArray = $velos->createVeloArray($hauteur,$type,$prix);
            	$result = $velos->createVelo($velosArray);
            	if($result['success']){
            		redirect_to("/listeVelo");
            	}
            	else
            	{
            		$message = "erreur de creation du velo";
            		$_SESSION['message'] = $message;
            		redirect_to("/inscrireVelo");
            	}

            }
            else{
            	$message = "erreur de creation du velo";
            	$_SESSION['message'] = $message;
            	redirect_to("/inscrireVelo");
            }
		}
	}
?>