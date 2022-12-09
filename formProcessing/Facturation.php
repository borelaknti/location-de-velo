<?php
include_once realpath(dirname(__DIR__)) .  '/includes/MySQLDatabase.php';
include_once realpath(dirname(__DIR__)) . '/models/Facture.php';
include_once realpath(dirname(__DIR__)) .  '/includes/functions.php';
include_once realpath(dirname(__DIR__)) .  '/layouts/header.php';

$facture = new Facture();


$factureInf = $facture->findOneFacture($_GET['id']);
?>
<?php

$htmlTable =  '<div class="row">';
if(!empty($factureInf))
{
        $htmlTable .=  '<div class="form-group row mb-3 ">
                            <label  class=" nom col-sm-3  offset-md-1 "> Numero de Facture : </label>
                                <div class="col-sm-6">
                                    <label class="inf ">'. $factureInf[0]->idr .'</label> </div> </div>';
    	$htmlTable .=  '<div class="form-group row mb-3 ">
                            <label  class=" nom col-sm-3  offset-md-1 "> Nom : </label>
                                <div class="col-sm-6">
                                    <label class="inf ">'. $factureInf[0]->name .'</label> </div> </div>';
        $htmlTable .=  '<div class="form-group row mb-3 ">
                            <label  class=" nom col-sm-3  offset-md-1 "> Adresse: </label>
                                <div class="col-sm-6">
                                    <label class="inf "> '. $factureInf[0]->addresse .' </label> </div> </div>';
        $htmlTable .=  '<div class="form-group row mb-3 ">
                            <label  class=" nom col-sm-3  offset-md-1 "> Telephone: </label>
                                <div class="col-sm-6">
                                    <label class="inf ">  '. phoneFormat($factureInf[0]->phone) .'</label> </div> </div>';
        $htmlTable .=  '<div class="form-group row mb-3 ">
                            <label  class=" nom col-sm-3  offset-md-1 "> Numero de carte de credit: </label>
                                <div class="col-sm-6">
                                    <label class="inf "> '. formatCreditCardNumber($factureInf[0]->credit_card) .'</label> </div> </div>';
        $htmlTable .=  '<div class="form-group row mb-3 ">
                            <label  class=" nom col-sm-3  offset-md-1 "> Numero du velo loue: </label>
                                <div class="col-sm-6">
                                    <label class="inf ">'. $factureInf[0]->idv .' </label> </div> </div>';
        $htmlTable .=  '<div class="form-group row mb-3 ">
                            <label  class=" nom col-sm-3  offset-md-1 "> Hauteur: </label>
                                <div class="col-sm-6">
                                    <label class="inf "> '. $factureInf[0]->hauteur .'</label> </div> </div>';
        $htmlTable .=  '<div class="form-group row mb-3 ">
                            <label  class=" nom col-sm-3  offset-md-1 "> Type: </label>
                                <div class="col-sm-6">
                                    <label class="inf "> '. $factureInf[0]->type .'</label> </div> </div>';
		$htmlTable .= 	'<div class="form-group row mb-3 ">
                            <label  class=" nom col-sm-3  offset-md-1 "> Prix: </label>
                                <div class="col-sm-6">
                                    <label class="inf "> '. $factureInf[0]->prix .'</label> </div> </div>';
        if($factureInf[0]->available == 0)
        {
            $htmlTable .=   '<div class="form-group row mb-3 ">
                            <label  class=" nom col-sm-3  offset-md-1 "> Disponible: </label>
                                <div class="col-sm-6">
                                    <label class="inf "> oui </label> </div> </div>';
        }
        else
        {
            $htmlTable .=   '<div class="form-group row mb-3 ">
                            <label  class=" nom col-sm-3  offset-md-1 "> Disponible: </label>
                                <div class="col-sm-6">
                                    <label class="inf "> non </label> </div> </div>';
        }
                	
}else 
{
	$htmlTable .=  '<tr><td colspan="5" class="alert alert-danger text-center"><em>Aucune facture n\'a été trouvé.</em></td></tr>';
}
$htmlTable .=  '	<div class="row justify-content-end mb-5 me-2 gx-1">
                        <a  href="listeFacture.php" class="link btn btn-success col-sm-2 offset-md-1 " role="button">   liste de factures   </a>
                        <a  href="index.php" class="link btn btn-success col-sm-2 offset-md-1 " role="button">   Retour au menu   </a>
                    </div>
        </div> ';
?>