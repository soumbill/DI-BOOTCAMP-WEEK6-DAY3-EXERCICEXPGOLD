<?php

function sum_of_digits($nbre){
    $somme = 0;
    for($i=0;$i<strlen($nbre) ;$i++)
    {
        $somme += $nbre[$i];
    }

    return $somme;
}

echo sum_of_digits('999999');
