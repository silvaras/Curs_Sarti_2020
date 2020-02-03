<?php

function test(){
    return "funciona";
}

function suma($a,$b){
    return $a+$b;
}

function resta ($x, $y)
{
	$resultado=$x-$y;
	return $resultado;
}

function multi ($x, $y)
{
	$resultado=$x*$y;
	return $resultado;
}

function divi ($x, $y)
{
	$resultado=$x/$y;
	return $resultado;
}

function operacio($n1, $n2, $operacion) {
	$resultado = 0;

	if($operacion == "+") {

	$resultado = $n1 + $n2;

	}else if($operacion == "-") {

	$resultado = $n1 - $n2;

	}else if($operacion == "*") {

	$resultado = $n1 * $n2;

	}else if($operacion == "/") {

	$resultado = $n1 / $n2;

	}

	return $resultado; // Devolver el resultado
}




/*function operacio($a,$b,$o){

    $string = "a $o b";

    $result = eval('return ' . preg_replace('/([a-zA-Z0-9])+/', '\$$1', $string) . ';');

    return $result;
}*/


?>
