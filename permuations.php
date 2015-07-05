<?php

$input = "hey";

function string_getpermutations($prefix, $characters, &$permutations)
{
    if (count($characters) == 1)
        $permutations[] = $prefix . array_pop($characters);
    else
    {
        for ($i = 0; $i < count($characters); $i++)
        {
            $tmp = $characters;
            unset($tmp[$i]);

            string_getpermutations($prefix . $characters[$i], array_values($tmp), $permutations);
        }
    }
}
$characters = array();
for ($i = 0; $i < strlen($input); $i++)
    $characters[] = $input[$i];
$permutations = array();



print "<pre>";

print_r($characters);
string_getpermutations("", $characters, $permutations);

print_r($permutations);

print "</pre>";

?>