<?php
include_once realpath(dirname(__DIR__)) .  '/includes/MySQLDatabase.php';
include_once realpath(dirname(__DIR__)) . '/models/Velos.php';
include_once realpath(dirname(__DIR__)) .  '/includes/functions.php';
include_once realpath(dirname(__DIR__)) .  '/layouts/header.php';

$velos = new Velos();
$veloList = $velos->findAll();
?>
<?php

$htmlTable =  '<table border="1" class="list"> 
					<tr>
						<th> numero d\'identification  </th> <th> Hauteur </th> <th> Type </th> <th>Prix</th> <th>Disponibilite</th> <th colspan="2">action</th>
					</tr>';
if(count($veloList) > 0)
{
    foreach ($veloList as $velo)
    {
    	$htmlTable .=  '<tr>';
        $htmlTable .=  '<td> <label class="maj">'. $velo->id .'</label> </td>';
        $htmlTable .=  '<td>'. $velo->hauteur .'</td>';
        $htmlTable .=  '<td>'. $velo->type .'</td>';
        $htmlTable .=  '<td class="phone-number">'. $velo->prix .'</td>';
        if($velo->available == 1)
            $htmlTable .=  '<td> <i class="fas fa-remove icone1"></i></td>';
        else
            $htmlTable .=  '<td> <i class="fas fa-check icone2"></i>';
        if($velo->available == 1)
            $htmlTable .=  '<td>  <i class="fas fa-plus"></i>  </td> <td> <i class="fas fa-trash"></i> </td>';
        else
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