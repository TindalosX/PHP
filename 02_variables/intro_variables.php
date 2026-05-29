<?php

	# Variables in PHP start's whith the character $
	#followed by the name of the variable.
	
	#Use the assignment operator, to assign a value
	#to the variable.
	$color = "red";
	
	#Print the variable value.
	
	#The double quotation marks "" interpret
	#the content.
	# variables: $name, $num...
	# Escape sequences: \n, \t, \r...
	
	#Inside double quotation marks.
	echo "The color is: $color";
	echo "\n"; #New line
	
	#Using the variable directly
	echo $color;
	echo "\n";
	
	#String concatenation using the concatenation 
	#operator (.)
	echo "The color is: " . $color . "\n";
	echo "\n";
	
	#This doesn't work as you expected.
	echo '$color\n'; #Plain text.
	echo "\n";
	echo "\n";
	
	#The content inside single quotation marks '' is
	#plain text; they do not interpret the content.
	
	#You don't need to declare the type beforehand
	#PHP infers it automatically.
	$num = 11;
	
	echo "Your number is : $num";
	echo "\n";
	
	$num = "11";
	
	echo "Your number is : $num";
