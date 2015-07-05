<?php

function longestPalindrome($s){
	print($s);
	if($s == ""){
		return;
	}
	if(strlen($s) == 1){
		return $s;
	}

	$longest = substr($s, 0, 1);

	for($i = 0; $i < strlen($s); $i++){
		$tmp = helper($s, $i, $i);
		if(strlen($tmp) > strlen($longest)){
			$longest = $tmp;
		}

		$tmp = helper($s, $i, $i+1);
		if(strlen($tmp) > strlen($longest)){
			$longest = $tmp;
		}
	}

	print $longest;
}

function helper($s, $b, $e){
	while($b > 0 && $e <= (strlen($s) - 1) && $s[$b] == $s[$e]){
		$b--;
		$e++;
	}

	print(substr($s, $b+1, $e - $b));
	print("<br />");

	return substr($s, $b+1, $e - $b);
}


longestPalindrome("sfweoifufsa");