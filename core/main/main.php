<?php

function includes($arguments){
	$arguments = explode(',',$arguments);
	foreach($arguments as $argument){
		require core_dir.$argument.'/'.'index.php';
	}
 }

function rtemp($template, $data=null,$dlvl=0){
 	require dlvl($dlvl).temp_dir.$template.'.php';
 }

function sview($module='main',$workflow='main',$view_name='main' ,$data=null){
 	require mod_dir.$module.'/workflows/'.$workflow.'/views/'.$view_name.'.php';
//echo mod_dir.$module.'/workflows/'.$workflow.'/views/'.$view_name.'.php';

	//echo 'this is the main module';
}

function dlvl($level){
	$count=1;
	$lvlpref='';
	while($count<=$level){
		$lvlpref=$lvlpref.'../';
		$count++;
	}
	return $lvlpref;
}

function rt($arg){
	echo $arg;
}
