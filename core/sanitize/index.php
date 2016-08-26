<?php 

/* This code sanitizes all html inputs to prevent sql injection*/

function sanitize($input,$ret = false){
	global $escaped_chars,$flash_message;
	
	$org=$input;

	foreach($escaped_chars as $eitem){

		$input = str_replace($eitem,'',$input);
	}

	if (count_chars($input)!=count_chars($org)){ $flash_message = "Invalid input string(s) detected!";}
if ($ret!=false){return $org." : ".$input;}
}

function get_s($arg){
	return sanitize($_GET[$arg]);
} 

