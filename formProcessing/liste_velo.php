<?php
include_once realpath(dirname(__DIR__)) .  '/includes/MySQLDatabase.php';
include_once realpath(dirname(__DIR__)) . '/models/Velos.php';
include_once realpath(dirname(__DIR__)) . '/models/Rentals.php';
include_once realpath(dirname(__DIR__)) .  '/includes/functions.php';
include_once realpath(dirname(__DIR__)) .  '/layouts/header.php';

$velos = new Velos();
$rentals = new Rentals();
$veloList = $velos->findAll();
$rentalList = $rentals->findAll();
//$val = 6;
 //$res = searchRental($val,$rentalList);
 //die(var_dump($res));
?>
<?php

$htmlTable =  '<table border="1" class="list"> 
					<tr>
						<th> numero d\'identification  </th> <th> Hauteur </th> <th> Type </th> <th>Prix</th> <th>Disponibilite</th> <th>Date de retour</th> <th colspan="3">action</th>
					</tr>';
if(count($veloList) > 0)
{
    foreach ($veloList as $velo)
    {
        $res = searchRental($velo->id,$rentalList);
    	$htmlTable .=  '<tr>';
        $htmlTable .=  '<td> <label class="maj">'. $velo->id .'</label> </td>';
        $htmlTable .=  '<td>'. $velo->hauteur .'</td>';
        $htmlTable .=  '<td>'. $velo->type .'</td>';
        $htmlTable .=  '<td class="phone-number">'. $velo->prix .'</td>';
        if($velo->available == 1)
            $htmlTable .=  '<td> <i class="fas fa-remove icone1"></i></td>';
        else
            $htmlTable .=  '<td><i class="fas fa-check icone2"> </i>';
        if($velo->available == 1){
            //die(var_dump($res));
            if($res == null)
                $htmlTable .=  '<td> Aucune date de retour </td>';
            else
                $htmlTable .=  '<td> '.$res->return_date .'  </td>';
        }
        else
            $htmlTable .=  '<td> Encore en stock </td>';
        if($velo->available == 1)
            $htmlTable .=  '<td>  <i class="fas fa-plus"></i>  </td> <td> <a  href="/formProcessing/supprimerVelo.php?id='. $velo->id.'" " class="link" > <i class="fas fa-trash"></i>  </a> </td>  <td> <a  href="/formProcessing/changeEtat.php?id='. $velo->id.'" " class="link" > <i class="fas fa-check-circle icone2"></i> </a>  </td>';
        else
            $htmlTable .=  '<td> <a  href="locationVelo.php?id='. $velo->id.'" " class="link" > <i class="fas fa-plus"></i> </a> </td> <td> <a  href="/formProcessing/supprimerVelo.php?id='. $velo->id.'" " class="link" > <i class="fas fa-trash"></i>  </a> </td> <td>  <i class="fas fa-check-circle " ></i>   </td>';
        $htmlTable .=  '</tr>';
    }
}
else 
{
	$htmlTable .=  '<tr><td colspan="5" class="alert alert-danger text-center"><em>Aucun dossier n\'a été trouvé.</em></td></tr>';
}
$htmlTable .=  '	</table> ';

?>