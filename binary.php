<?php

function binary_search($number, $array){
	$beg = 0;
	$end = count($array);

	while($beg < $end){
		$mid = (int) (($beg+$end)/2);

		if($array[$mid] > $number){
			$end = $mid-1;
		}
		else if($array[$mid] < $number){
			$beg = $mid+1;
		}
		else {
			return $mid;
		}

	}

	return -1;
}

print "<pre>";

print_r(binary_search(3, [])); print(-1); print "<br/>";
print_r(binary_search(3, [1])); print(-1); print "<br/>";
print_r(binary_search(1, [1])); print(0); print "<br/>";
print_r(binary_search(1, [1, 3, 5])); print(0); print "<br/>";
print_r(binary_search(3, [1, 3, 5])); print(1); print "<br/>";
print_r(binary_search(5, [1, 3, 5])); print(2); print "<br/>";
print_r(binary_search(0, [1, 3, 5])); print(-1); print "<br/>";
print_r(binary_search(2, [1, 3, 5])); print(-1); print "<br/>";
print_r(binary_search(4, [1, 3, 5])); print(-1); print "<br/>";
print_r(binary_search(6, [1, 3, 5])); print(-1); print "<br/>";
print_r(binary_search(1, [1, 3, 5, 7])); print(0); print "<br/>";
print_r(binary_search(3, [1, 3, 5, 7])); print(1); print "<br/>";
print_r(binary_search(5, [1, 3, 5, 7])); print(2); print "<br/>";
print_r(binary_search(7, [1, 3, 5, 7])); print(3); print "<br/>";
print_r(binary_search(0, [1, 3, 5, 7])); print(-1); print "<br/>";
print_r(binary_search(2, [1, 3, 5, 7])); print(-1); print "<br/>";
print_r(binary_search(4, [1, 3, 5, 7])); print(-1); print "<br/>";
print_r(binary_search(6, [1, 3, 5, 7])); print(-1); print "<br/>";
print_r(binary_search(8, [1, 3, 5, 7])); print(-1); print "<br/>";

print "</pre>";

?>