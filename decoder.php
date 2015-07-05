<?php

function decoder($s){
	// print $s."<br />";
	// print "A";

	if(strlen($s) <= 1) return 1;
	if(isset($s[1])){
		if( ($s[0] == '1') || ($s[0] == '2' && $s[1] <= 6) ) {
			return decoder(substr($s, 1)) + decoder(substr($s,2));
		}
	}
	return decoder(substr($s, 1));

}

print "<pre>";

print decoder("11023");

print "</pre>";

?>