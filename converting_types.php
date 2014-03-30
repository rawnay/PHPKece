<?php
	# CONVERTING TYPES
	
	$num_int = "3 tiga";
	echo "string --> \$num_int = " . $num_int;
	echo "<br/>this set convert \$num_int <br/>";
	if (settype($num_int,"integer")) {
		echo $num_int;
	}
?>