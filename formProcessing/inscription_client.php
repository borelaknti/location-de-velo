<?php
	session_start();
	ini_set('display_errors', 'on');
	ini_set('log_errors', 1);
	ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
	ob_start();
	date_default_timezone_set('America/New_York');
	require_once("../includes/functions.php");
	require_once("../models/Clients.php");

	$message = "";
	$_SESSION['message']='';
	$_SESSION['name']='';
	$_SESSION['adress'] = '';
	$_SESSION['phone'] = '';
	$_SESSION['cart'] = '';
	$_SESSION['nameErr'] = $_SESSION['adressErr'] = $_SESSION['phoneErr'] = $_SESSION['cartErr']=  "";
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = "";
		$adress = "";
		$phone = "";
		$cart = "";
		if(isset($_POST['submit']))
		{
			$name = trim($_POST['name']);
			$adress = trim($_POST['adress']);
			$phone = trim($_POST['phone']);
			$cart = trim($_POST['cart']);

			

			if (empty($name)) {
            $_SESSION['nameErr'] = "* Le nom est obligatoire";
        	} else {
            	$_SESSION['name'] = cleanUpInputs($name);  //demander apres ce que ca veut dire
            	// check if name only contains letters and whitespace
            	//die(var_dump($_SESSION['name'] ));
            	if (!preg_match("/^[a-zA-Z-' ]*$/",$_SESSION['name'])) {
                	$_SESSION['nameErr'] = "* Seules les lettres et les espaces blancs sont autorisés";
           	 	}
            	if (strlen($_SESSION['name']) > 100) {
                	$_SESSION['nameErr'] = "* Le nom doit comporter un maximum de 100 caractères.";
            	}
            }
            if(empty($adress)){
            	$_SESSION['adressErr'] =  "* L'adresse est obligatoire";
            }
            if (empty($phone)) {
            	$_SESSION['phoneErr'] = "* Le numero de telephone est obligatoire";
            	} else {
            		$_SESSION['phone'] = cleanUpInputs($phone);
            		if (!preg_match("/^[0-9]+$/",$_SESSION['phone'])) 
            		{
            	 		$_SESSION['phoneErr'] = "* Le numero de telephone ne peux pas contenir des lettres";
            		} 
            		if (strlen($_SESSION['phone']) > 12) 
            		{
            	 		$_SESSION['phoneErr'] = "* Le numero de telephone n'inexistent pas ";
            		} 
            	}
            
            if (empty($cart)) {
            	$_SESSION['cartErr'] = "* Le numero de carte bancaire est obligatoire";
            	} else {
            		$_SESSION['cart'] = cleanUpInputs($cart);
            		if (!preg_match("/^[0-9]+$/",$_SESSION['cart'])) 
            		{
            	 		$_SESSION['cartErr'] = "* Le numero de carte ne peux pas contenir des lettres ou de caractere speciaux";
            		} 
            		if (strlen($_SESSION['cart']) > 20) 
            		{
            	 		$_SESSION['carteErr'] = "* Le numero de carte n'inexistent  pas";
            		} 
            	}
            

            if(empty($message) && empty($_SESSION['nameErr']) && empty($_SESSION['adressErr']) && empty($_SESSION['phoneErr']) && empty($_SESSION['cartErr']))
            {
            	$clients = new Clients();
            	$clientList = $clients->findAll();
            	if(searchClient($name,$clientList))
            	{
            		$message = "le client ajouter existe deja !!!";
            		$_SESSION['message'] = $message;
            		redirect_to("/inscriptionClient");
            	}
            	else
            	{
            		$clientsArray = $clients->createClientArray($name,$adress,$phone,$cart);
            		$result = $clients->createClient($clientsArray);
            		if($result['success']){
            			redirect_to("/listeClient");
            		}
            		else
            		{
            			$message = "erreur de creation du client";
            			$_SESSION['message'] = $message;
            			redirect_to("/inscriptionClient");
            		}
            	}
            }
            else{
            	$message = "erreur de creation du client";
            	$_SESSION['message'] = $message;
            	redirect_to("/inscriptionClient");
            }
		}
	}
?>