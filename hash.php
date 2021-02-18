<?php
	error_reporting(E_ERROR | E_PARSE);
	include('anti/anti.php');
	$date = new DateTime("NOW");
	$hash = crypt($date->format( "m-d-Y H:i:s.u").$_SERVER['HTTP_USER_AGENT'], '');
	$hash2 = substr(str_shuffle("0987654321abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ".md5($date->format( "m-d-Y H:i:s.u"))), 0, 1000);
?>