<?php
session_start();
ini_set('display_errors', 'on');
ini_set('log_errors', 1);
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ob_start();
date_default_timezone_set('America/New_York');

require_once("../includes/functions.php");
require_once("../models/Velos.php");




$velos = new Velos();
$veloList = $velos->findAll();
$velo= search($_GET['id'],$veloList);
if ($velo->available == 1){
    //die(var_dump($userArray));
    $var = 0;
    $result = $velos->updateVeloAll($_GET['id'],$var);
    if ($result['success']){
        
        redirect_to("../listeVelo.php");
    }
    else{
        $_SESSION['message'] = "Il y a eu une erreur lors du changement d'etat.";
    }
}
else
{
    //die(var_dump($userArray));
    $var = 1;
    $result = $velos->updateVeloAll($_GET['id'],$var);
    if ($result['success']){
        redirect_to("../listeVelo.php");
    }
    else{
        $message = "Il y a eu une erreur lors du changement d'etat.";
        
    }
}
?>