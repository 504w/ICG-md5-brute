<?php
error_reporting(false);
$passpath = $argv[1];
$hash = $argv[2];
$passlist = explode("\n" , file_get_contents(realpath($passpath)));
foreach($passlist as $pass){
	if(md5($pass)=== $hash){
		$true = 1;
		echo "\nFound ! pass is :\n\n\n$pass\n";
	}
}
if($true){
} else {
	echo "\nNot Found OR something went wrong\n";
}
?>
