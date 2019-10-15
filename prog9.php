<?php
	$states = "Mississipi Alabama Texas Massachusetts Kansas";
	$statesarray = [];
	$states1=explode(' ',$states);
	$i=0;

	foreach($states1 as $state) { 
		if(preg_match('/xas$/',($state))) {
			$statesarray[$i]=($state);
			$i=$i+1;
			print "the states that end in xas :" .$state;
		}
	}

	echo"<br/>";

	foreach($states1 as $state) {
		if(preg_match('/^k.*s$/i',($state))) {
			$statesarray[$i]=($state);
			$i=$i+1;
			print "the states that start with k and end with s :" .$state;
		}
	}
	echo"<br/>";

	foreach($states1 as $state) {
		if(preg_match('/^m.*s$/i',($state))) {
			$statesarray[$i]=($state);
			$i=$i+1;
			print "the states that start with m and end with s :" .$state;
		}
	}
	echo"<br/>";

	foreach($states1 as $state) {
		if(preg_match('/a$/',($state))) {
			$statesarray[$i]=($state);
			$i=$i+1;
			print "the states that end in a :" .$state;
		}
	}

?>

