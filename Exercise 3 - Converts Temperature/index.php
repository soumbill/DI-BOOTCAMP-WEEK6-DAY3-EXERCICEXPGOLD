<?php




$celsuis = -300;
function tempConversionC($t_celsuis)
{
    $convert = (($t_celsuis * 9) / 5 + 32);

    return number_format($convert,2,'.', ' ');

}

echo tempConversionC($celsuis);
function tempConversionK($t_celsuis)
{
 //K = C + 273.15

    $constante = 273.15;

    $convert =  number_format($t_celsuis + $constante,2,'.', ' ');
   
    return $convert > 0 ? $convert : "Invalide" ;

}
echo "\n";

echo tempConversionK($celsuis);