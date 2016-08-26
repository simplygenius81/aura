<!DOCTYPE html>
<?php 
	require 'core/conf/conf.php';
	require 'core/main/main.php';
	includes('sanitize,test_module');
	rt(get_s('rt'));
	rt(get_s('id'));
	
	//sanitize("tester or insert = + - order union <> !");	
rtemp('head',array('title'=>'Home'));
rtemp('nav-left');
rtemp('sidebar');
//rtemp('body');
//sview('main','main','test');
rtemp('tail');

?>







