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

function search($id,$veloList)
{
    foreach ($veloList as $velo)
    {
        if ($velo->id == $id)
            return $velo;
    }

}

function searchRental($id,$lab)
{
    //$tab[] = NULL;
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