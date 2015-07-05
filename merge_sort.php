<?php

function merge_sort($array){
	if(count($array) == 1){
		return $array;
	}

	$middle = (int)(count($array)/2);
	$left = array_slice($array, 0, $middle);
	$right = array_slice($array, $middle);

	$left = merge_sort($left);
	$right = merge_sort($right);

	$return_array = merge($left, $right);

	return($return_array);
}

function merge(&$l, &$r)
{
  $result = array();

  // while both arrays have something in them
  while (count($l)>0 && count($r)>0) {
      if ($l[0] <= $r[0]) {
          array_push($result, array_shift($l));
      }
      else {
          array_push($result, array_shift($r));
      }
  }

  array_splice($result, count($result), 0, $l);
  array_splice($result, count($result), 0, $r);

  return $result;
}

print "<pre>";
print_r(merge_sort(array(4,5,7,2,5,7,8,12,14,18)));
print "</pre>";