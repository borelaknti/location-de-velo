<?php
include_once realpath(dirname(__DIR__)) .  '/includes/MySQLDatabase.php';
include_once realpath(dirname(__DIR__)) . '/models/Factures.php';
include_once realpath(dirname(__DIR__)) . '/models/Clients.php';
include_once realpath(dirname(__DIR__)) .  '/models/Velos.php';
include_once realpath(dirname(__DIR__)) .  '/includes/functions.php';
include_once realpath(dirname(__DIR__)) .  '/layouts/header.php';

$factures = new Factures();
$velos = new Velos();
$clients = new Clients();
$clientList = $clients->findAll();
$veloList = $velos->findAll();
$factureList = $factures->findAll();   
//die(var_dump($veloList));
?>
<?php

$htmlTable =  '<table  class="table  table-striped table-bordered">
                <thead class="table-dark"> 
					<tr>
						<th> numero d\'identification  </th> <th> Type de velo </th> <th> Nom du client </th> <th> Date de retour </th>
					</tr>
                </thead>
                <tbody>';
if((count($clientList) > 0) && (count($veloList) > 0) && (count($factureList) > 0) )
{
    
    foreach ($factureList as $facture)
    {
        $res = search($facture->velo_id,$veloList);
        $rec = search($facture->client_id,$clientList);
    	$htmlTable .=  '<tr>';
        $htmlTable .=  '<td> <label class="maj">'. $facture->id .'</label> </td>';
        $htmlTable .=  '<td>'. $res->type .'</td>';
        $htmlTable .=  '<td>'. $rec->name .'</td>';
        if(empty($facture->return_date))
            $htmlTable .=  '<td> Aucune date de retour </td>';
        else    
            $htmlTable .=  '<td>'. $facture->return_date .'</td>';
        $htmlTable .=  '</tr>';
    }
}
else 
{
	$htmlTable .=  '<tr><td colspan="5" class="alert alert-danger text-center"><em>Aucune facture n\'a été trouvé.</em></td></tr>';
}
$htmlTable .=  '	</tbody> </table> ';


?>