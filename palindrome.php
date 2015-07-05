<?php

$word = "amanaplanacanalpanama";

function pal($s){
	for($i = 0; $i < floor(strlen($s) /2); $i++){
		if($s[$i] != $s[strlen($s)-1-$i]){
			return false;
		}
	}
	return true;
}

var_dump(pal($word));

?>