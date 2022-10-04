<?php
include_once realpath(dirname(__DIR__)) .  '/includes/MySQLDatabase.php';
include_once realpath(dirname(__DIR__)) . '/models/Facture.php';
include_once realpath(dirname(__DIR__)) .  '/includes/functions.php';
include_once realpath(dirname(__DIR__)) .  '/layouts/header.php';

$facture = new Facture();
$factureInf = $facture->findFacture();
?>
<?php

$htmlTable =  '<table class="fact" cellpadding="10" cellspacing="5">';
if($factureInf)
{
	//die(var_dump($factureInf));
    	$htmlTable .=  '<tr> <td><label class="nom"> Nom: </label></td> <td><label class="inf ">'. $factureInf[0]->name .'</label></td> </tr>';
        $htmlTable .=  '<tr> <td><label class="nom"> Adresse: </label></td> <td><label class="inf "> '. $factureInf[0]->addresse .' </label></td> </tr>';
        $htmlTable .=  '<tr> <td><label class="nom"> Telephone: </label></td> <td><label class="inf "> '. phoneFormat($factureInf[0]->phone) .'</label> </td></tr>';
        $htmlTable .=  '<tr> <td><label class="nom"> Numero de carte de credit: </label></td> <td><label class="inf ">'. formatCreditCardNumber($factureInf[0]->credit_card) .'</label> </td> </tr>';
        $htmlTable .=  '<tr> <td><label class="nom"> Numero du velo loue: </label></td> <td><label class="inf ">'. $factureInf[0]->velo_id .' </label> </td></tr>';
        $htmlTable .=  '<tr> <td><label class="nom"> Hauteur: </label></td> <td><label class="inf "> '. $factureInf[0]->hauteur .'</label> </td> </tr>';
        $htmlTable .=  '<tr> <td><label class="nom"> Type: </label></td> <td><label class="inf "> '. $factureInf[0]->type .'</label> </td> </tr>';
		$htmlTable .= 	'<tr> <td><label class="nom"> Prix: </label></td> <td><label class="inf ">'. $factureInf[0]->prix .'</label> </td> </tr>';	
}
else 
{
	$htmlTable .=  '<tr><td colspan="5" class="alert alert-danger text-center"><em>Aucun dossier n\'a été trouvé.</em></td></tr>';
}
$htmlTable .=  '	</table> ';

?>