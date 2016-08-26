<?php

function includes($arguments){
	$arguments = explode(',',$arguments);
	foreach($arguments as $argument){
		require mod_dir.$argument.'/'.'index.php';
	}

 }
	echo 'this is the main module';

	function rt($arg){

		echo $arg;
	}