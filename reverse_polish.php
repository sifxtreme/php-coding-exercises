<?php

$a = ["2", "1", "+", "3", "*"];
$b = ["4", "13", "5", "/", "+"];
$c = ["2", "1", "+"];

function operate($array){
	$stack = array();
	$operations = ['+', '-', '*', '/'];
	foreach($array as $i){
		if(!in_array($i, $operations)){
			$stack[] = $i;
		} 
		else{
			$last = array_pop($stack);
			$prev = array_pop($stack);
			if($i == '+'){
				$stack[] = $prev + $last;
			}
			if($i == '-'){
				$stack[] = $prev - $last;
			}
			if($i == '*'){
				$stack[] = $prev * $last;
			}
			if($i == '/'){
				$stack[] = $prev / $last;
			}
		}
	}
	print_r($stack);
}

operate($a);
operate($b);
operate($c);