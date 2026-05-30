<?php
	#Null it represents a variable with no value.
	$null_value = null;
	
	#gettype: Get the type of a variable.
	echo gettype($null_value);
	echo "\n";
	echo "\n";
	
	#Numerics.
	
	$my_int = 100;
	$my_float = 12.192;
	
	echo "Integer: $my_int\n";
	echo "Decimal: $my_float\n";
	echo "\n";
	
	#Boolean.
	
	$is_valid = true;
	echo "$is_valid";
	
	$is_valid = false;
	echo "$is_valid";
	echo "\n";
	echo "\n";
	
	#String
	
	$item = "guitar";
	
	echo $item . "\n";
	echo "\n";
	
	#Array, an array is like a list of values.
	
	$my_list = [true, "white", -11, 12.90];
	
	#ERROR: echo and print cannot output array 
	#variables directly.

	#echo $my_list;
	#print($my_list);
	
	#var_dump function dumps information about a 
	#variable.
	echo var_dump($my_list);
