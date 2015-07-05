<?php

function sqrtz($num){
	
	$closeness = 0.0001;
	$current_digit = 1;
	$total = 0;
	$placement = 0;

	$correct = 0;

	while($current_digit > $closeness){

		while($total * $total < $num){
			$total += pow(10,$placement);
			if($total*$total > $num){
				$correct = $total - pow(10,$placement);
			}
		}

		$current_digit /= 10;
		$placement -= 1;

		$total = $correct;

	}
	

	return $correct;
}

print "<pre>";

print sqrtz(.94);

print "</pre>";

?>