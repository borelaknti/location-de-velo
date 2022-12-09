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
?>
<?php

$htmlTable =  '<table  class="table  table-striped table-bordered">
                <thead class="table-dark"> 
					<tr>
						<th> numero d\'identification  </th> <th> Type de velo </th> <th> Nom du client </th> <th> Date de retour </th> <th>action</th>
					</tr>
                </thead>
                <tbody>';
if((count($clientList) > 0) && (count($veloList) > 0) && (count($factureList) > 0) )
{
    
    foreach ($factureList as $facture)
    {
        $res = search($facture->velo_id,$veloList); // chercher le velo dans la liste de velo a l'aide de l'id
        $rec = search($facture->client_id,$clientList); // chercher le client dans la liste de clients a l'aide de l'id
    	$htmlTable .=  '<tr>';
        $htmlTable .=  '<td> <label class="maj">'. $facture->id .'</label> </td>';
        $htmlTable .=  '<td>'. $res->type .'</td>';
        $htmlTable .=  '<td>'. $rec->name .'</td>';
        if(empty($facture->return_date))
            $htmlTable .=  '<td> Aucune date de retour </td>';
        else    
            $htmlTable .=  '<td>'. $facture->return_date .'</td>';
        $htmlTable .=  ' <td> <a  href="/factureVelo.php?id='. $facture->id.'"  class="link" > <i class="fas fa-info-circle"></i>  </a> </td>';
        $htmlTable .=  '</tr>';
    }
}
else 
{
	$htmlTable .=  '<tr><td colspan="5" class="alert alert-danger text-center"><em>Aucune facture n\'a été trouvé.</em></td></tr>';
}
$htmlTable .=  '	</tbody> </table> ';


?>