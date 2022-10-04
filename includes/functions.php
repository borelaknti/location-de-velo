<?php

function formatCreditCardNumber($number): string
{
    return "**** **** **** ". substr($number,-4);
}

function phoneFormat($number): string
{
    return substr($number, 0, 3) .'-'. substr($number, 3, 3) .'-'. substr($number, 6);;
}