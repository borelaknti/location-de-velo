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
            $_SESSION['hauteurErr'] = "La hauteur est obligatoire";
        	} else {
            	$_SESSION['hauteur'] = cleanUpInputs($hauteur);

            	 if (!preg_match("/^[0-9\.]+$/",$hauteur)) 
            	 {
            	 	$_SESSION['hauteurErr'] = "La hauteur ne peux pas contenir des lettres";
            	 }  
            }
            if(empty($type)){
            	$_SESSION['typeErr'] =  "Le type est obligatoire";
            	
            }else
            {
            	$_SESSION['type'] = cleanUpInputs($type);
            	if (preg_match("/^[0-9-' +]*$/",$_SESSION['type'])) {
                	$_SESSION['typeErr'] = "le type ne peut pas contenir seulement les chiffres mais doit aussi contenir des lettres";}
            }
            if (empty($prix)) {
            	$_SESSION['prixErr'] = "Le prix est obligatoire";
            } else {
            	$_SESSION['prix'] = cleanUpInputs($prix);	
                if (!preg_match("/^[0-9\.]+$/",$prix))
                {
                    $_SESSION['prixErr'] = "Le prix ne peux pas contenir des lettres";
                }
            		if ($prix < 1 && empty($_SESSION['prixErr']))
                    {
                        $_SESSION['prixErr'] = " Le prix doit etre superieur a 1$ ";
                    }
                }
            

            if(empty($message) && empty($_SESSION['hauteurErr']) && empty($_SESSION['typeErr']) && empty($_SESSION['prixErr']))
            {
            	$velos = new Velos();
            	$veloList = $velos->findAll();
            	if(searchVelo($type,$veloList))
            	{
            		$message = "le velo ajouter existe deja !!!";
            		$_SESSION['message'] = $message;
            		redirect_to("/inscrireVelo");
            	}
            	else
            	{
            		$velosArray = $velos->createVeloArray($hauteur,$type,$prix);
            		$result = $velos->createVelo($velosArray);
            		if($result['success']){
            			$message = "";
            			redirect_to("/listeVelo");
            		}
            		else
            		{
            			$message = "erreur de creation du velo";
            			$_SESSION['message'] = $message;
            			redirect_to("/inscrireVelo");
            		}
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