<?php

function multiply_two_lists($list1, $list2){
    $multiple = 0;

    // var_dump($list1, $list2);
    $firstData = explode(' ', $list1);  
    $secondData = explode(' ', $list2);
    // var_dump($firstData, $secondData, strlen( $list1), strlen( $list2));
    // die();
    for($i=0;$i< count($firstData); $i++){
        for ($j = 0; $j < count($secondData); $j++){
            if($i == $j){
                $multiple = $firstData[$i] * $secondData[$j];
                echo $multiple ." ";
            }
        }
    }
}

multiply_two_lists(("20 12 5"), ("1 3 3"));
