UPDATE clients SET phone = REPLACE ( REPLACE ( REPLACE ( REPLACE ( REPLACE ( REPLACE ( REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (REPLACE (phone, '/', ''), ',', ''), '.', ''), '<', ''), '>', ''), '?', ''), ';', ''), ':', ''), '"', ''), "'", ''), '|', ''), '\\', ''), '=', ''), '+', ''), '-', ''), '&', ''), '^', ''), '%', ''), '$', ''), '#', ''), '@', ''), '!', ''), '~', ''), '`', ''), '', ''), '{', '' ), '}', '' ), '[', '' ), ']', '' ), '(', '' ), ')', '' )

UPDATE clients SET credit_card = concat(LEFT(credit_card , 13), concat(FLOOR(RAND()*(9-5+1)+5), FLOOR(RAND()*(9-5+1)+5),FLOOR(RAND()*(9-5+1)+5))) ;

UPDATE clients SET phone = concat(LEFT(phone , 9), FLOOR(RAND()*(9-5+1)+5)) ;
