<?php

function _max($array){
    $max=$array[0];
    foreach($array as $numero){
        if ($numero!=""){
            if($numero>$max) $max=$numero;
        }
    }
    return $max;

}
function _min($array){
    $min=$array[0];
    foreach($array as $numero){
        if ($numero!=""){
            if($numero<$min) $min=$numero;
        }
    }
    return $min;
}

function _suma($array){
    $sum=0;
    foreach($array as $numero){
        if ($numero!=""){
            $sum+=$numero;
        }
    }
    return $sum;
}

?>
