<?php

    error_reporting(E_ERROR | E_PARSE);

    include('get_ip.php');

	if ($countryCode == "FR" || $countryCode == "DZ" || $countryCode == "MA" || $countryCode == "TN" || $countryCode == "CD" || $countryCode == "MG" || $countryCode == "CM" || $countryCode == "CA" || $countryCode == "CI" || $countryCode == "BF" || $countryCode == "NE" || $countryCode == "SN" || $countryCode == "ML" || $countryCode == "RW" || $countryCode == "BE" || $countryCode == "GF" || $countryCode == "TD" || $countryCode == "HT" || $countryCode == "BI" || $countryCode == "BJ" || $countryCode == "CH" || $countryCode == "TG" || $countryCode == "CF" || $countryCode == "CG" || $countryCode == "GA" || $countryCode == "KM" || $countryCode == "GK" || $countryCode == "DJ" || $countryCode == "LU" || $countryCode == "VU" || $countryCode == "SC" || $countryCode == "MC") {
        $_SESSION['lang_'] = "fr.php";
    } elseif ($countryCode == "MX" || $countryCode == "PH" || $countryCode == "ES" || $countryCode == "CO" || $countryCode == "AR" || $countryCode == "PE" || $countryCode == "VE" || $countryCode == "CL" || $countryCode == "EC" || $countryCode == "GT" || $countryCode == "CU" || $countryCode == "HN" || $countryCode == "PY" || $countryCode == "SV" || $countryCode == "NI" || $countryCode == "CR" || $countryCode == "UY") {
        $_SESSION['lang_'] = "es.php";
    } else {
       $_SESSION['lang_'] = "en.php";
    }
    
?>