<?php
	
	$num_int = 1;
	$num_float = 3.4;
	$string = "hello";
	$bool = true;
	
	echo "\$num_int = {$num_int} is a " . gettype($num_int);
	echo "<br/>";
	echo "\$num_float = {$num_float} is a " . gettype($num_float);
	echo "<br/>";
	echo "\$string = '{$string} ' is a " . gettype($string);
	echo "<br/>";
	echo "\$bool = '{$bool}' is a " . gettype($bool);
	
?>