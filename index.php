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

function isIsogram(string $expression): bool {
	$expression_array = str_split($expression);
	$count_values = array_count_values($expression_array);
	$current_value = $count_values[$expression[0]];
	foreach ($count_values as $count_value) {
		if($count_value != $current_value) return false;
	}
	return true;
}
// Test isHeterogram 
/*
var_dump(isHeterogram("hola"));
var_dump(isHeterogram("holla"));
var_dump(isHeterogram("holaa"));
var_dump(isHeterogram(""));
*/
//Test isIsogram 
/*
var_dump(isIsogram("quetall!"));
var_dump(isIsogram("nana"));
*/
//Test isPangram 
/*
var_dump(isPangram("ho"));
var_dump(isPangram("abcdefghijklmnopqrstuvwxyz"));
var_dump(isPangram("abcdefghijklmnopqrstuvwxyztuvwxyz"));
*/
?>