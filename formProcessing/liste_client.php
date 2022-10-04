<?php
include_once realpath(dirname(__DIR__)) .  '/includes/MySQLDatabase.php';
include_once realpath(dirname(__DIR__)) . '/models/Clients.php';
include_once realpath(dirname(__DIR__)) .  '/includes/functions.php';
include_once realpath(dirname(__DIR__)) .  '/layouts/header.php';

$clients = new Clients();
$clientList = $clients->findAll();
?>
<?php

$htmlTable =  '<table border="1" class="list"> 
					<tr>
						<th> numero d\'identification  </th> <th> Nom </th> <th> Adresse </th> <th>telephone</th> <th>Numero carte credit</th> <th colspan="2">action</th>
					</tr>';
if(count($clientList) > 0)
{
    foreach ($clientList as $client)
    {
    	$htmlTable .=  '<tr>';
        $htmlTable .=  '<td> <label class="maj">'. $client->id .'</label> </td>';
        $htmlTable .=  '<td>'. $client->name .'</td>';
        $htmlTable .=  '<td>'. $client->addresse .'</td>';
        $htmlTable .=  '<td class="phone-number">'. phoneFormat($client->phone) .'</td>';
        $htmlTable .=  '<td>'. formatCreditCardNumber($client->credit_card) .'</td>';
        $htmlTable .=  '<td> <a  href="locationVelo.php" class="link" > <i class="fas fa-plus"></i> </a> </td> <td> <i class="fas fa-trash"></i> </td>';
        $htmlTable .=  '</tr>';
    }
}
else 
{
	$htmlTable .=  '<tr><td colspan="5" class="alert alert-danger text-center"><em>Aucun dossier n\'a été trouvé.</em></td></tr>';
}
$htmlTable .=  '	</table> ';

?>