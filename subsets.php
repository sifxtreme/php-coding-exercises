<?php

$array = array(1,2,3,4,5);

function subset($a, $n){
	$subsets = array();


	for($i = 0; $i < pow(2,count($a)); $i++){
		// print $i."<br />";

		$set = $i;
		$count = 0;
		$str = "";

		while ($set != 0){
			if (($set & 1) != 0){
				print "|".$set;
				$str .= $a[$count];

			}

			// this is where the magic happens
			$set = $set >> 1;
			$count++;
		}
		if(strlen($str) == $n){
			print "<br />"; print_r($str); print "<br />"; 
		}
	}

}



function r_sub($arr, $k, $start, $subset, &$m = null){
	if($m == null){
		$m = array();
	}
		
	if(count($subset) == $k){
		$m[] = $subset;
		return;
	}
	if($start == count($arr)){
		return;
	}

	r_sub($arr,$k,$start+1, $subset, $m);

	$subset[] = $arr[$start];
	r_sub($arr, $k, $start+1, $subset, $m);

	if(count($m) == 10){
		return($m);
	}

}

print "<pre>";


// subset($array, 2);
$array = array(1,2,3,4,5);
$mad = array();
print_r( r_sub($array,2,0,array()));



print "</pre>";

?>