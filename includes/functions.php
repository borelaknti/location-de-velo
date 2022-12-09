<?php

function formatCreditCardNumber($number): string
{
    return "**** **** **** ". substr($number,-4);
}

function phoneFormat($number): string
{
    return substr($number, 0, 3) .'-'. substr($number, 3, 3) .'-'. substr($number, 6);;
}

function redirect_to($location, $status=302)
{
   header('Location: '.$location, true, $status);
   exit();
}

function cleanUpInputs($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}
// chercher un item par id dans une liste
function search($id,$veloList)
{
    foreach ($veloList as $velo)
    {
        if ($velo->id == $id)
            return $velo;
    }
}
//chercher une facture a l'aide de son id dans un liste
function searchRental($id,$lab)
{
    foreach ($lab as $index)
    {
        if ($index->velo_id == $id && !empty($index->return_date))
            $tab[] = $index;
    }
    if (empty($tab))
        return null;
    else
        return end($tab);
}

function outputMessage($message = ""){
    if(!empty($message)){
        return "<p class=\"error-msg\">{$message}</p>";
    }else{
        return "";
    }
}

function outputError($msg)
{
    if ($msg){
        return "<p class=\"error-msg mt-3 \"> {$msg} </p>";
            }
}
//chercher un velo a l'aide de son type dans une liste de velo
function searchVelo($type,$veloList)
{
    foreach ($veloList as $velo)
    {
        if ($velo->type == $type)
            return true;
    }
    return false;
}
//chercher un client a l'aide de son nom dans une liste de clients
function searchClient($nom,$clientList)
{
    foreach ($clientList as $client)
    {
        if ($client->name == $nom)
            return true;
    }
    return false;
}