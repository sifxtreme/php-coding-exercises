<?php

function merge_two($a1, $a2){
	$s1 = count($a1);
	$s2 = count($a2);

	$i1 = 0;
	$i2 = 0;

	$r = array();

	while(!empty($a1) || !empty($a2)) {
		if(!empty($a1)){
			if(!empty($a2) && $a1[0] > $a2[0]){
				$r[] = array_shift($a2);
			}
			else {
				$r[] = array_shift($a1);
			}
		}
		else{
			$r[] = array_shift($a2);
		}

	}

	return $r;
}

print "<pre>";


$bb = array(1,3,4);
$aa = array(2,4,5,6,7,8,9);


print_r(merge_two($bb,$aa));



print "</pre>";

?>