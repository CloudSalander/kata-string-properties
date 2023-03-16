<?php
//TODO: Mejora con callbacks?
define('ALPHABET','abcdefghijklmnopqrstuvwxyz');

function isHeterogram(string $expression): bool {
	$search_limit = strlen($expression);
	for($i = 0; $i < $search_limit; ++$i) {
		if(str_contains(substr($expression,$i+1), $expression[$i])) return false;
	}	
	return true;
}

function isPangram(string $expression): bool {
	$search_limit = strlen(ALPHABET);
	for($i = 0; $i < $search_limit; ++$i) {
		if(!str_contains($expression,ALPHABET[$i])) return false;
	}
	return true;
}
/*
function isIsogram(string $expression): bool {
	$string_array = explode("", $expression);
	var_dump(array_count_values($expression));
}*/
/* Test isHeterogram */
/*
var_dump(isHeterogram("hola"));
var_dump(isHeterogram("holla"));
var_dump(isHeterogram("holaa"));
var_dump(isHeterogram(""));
*/
/*Test isIsogram */
/*
isIsogram("quetal!");
*/

/*Test isPangram */

var_dump(isPangram("ho"));
var_dump(isPangram("abcdefghijklmnopqrstuvwxyz"));
var_dump(isPangram("abcdefghijklmnopqrstuvwxyztuvwxyz"));

?>