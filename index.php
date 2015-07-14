<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <title>Mit leichten Computertätigkeiten Geld verdienen</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

                                            
        
        
            <script type="text/javascript" language="JavaScript">

                var wstat
                var ns4up = (document.layers) ? 1 : 0
                var ie4up = (document.all) ? 1 : 0
                var xsize = screen.width
                var ysize = screen.height
                var breite = 370
                var hoehe = 480
                var xpos = (xsize - breite) / 2
                var ypos = (ysize - hoehe) / 2

                function opwin(site, titel) {
                    wstat = window.open(site, titel, "scrollbars=yes,status=no,toolbar=no,location=no,directories=no,resizable=no,menubar=no,width=" + breite + ",height=" + hoehe + ",screenX=" + xpos + ",screenY=" + ypos + ",top=" + ypos + ",left=" + xpos)
                }

            </script>
        

        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="assets/css/jquery.ambiance.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <script src="assets/js/common.js" type="text/javascript"></script>
	<script src="assets/js/jquery-1.7.2.js" type="text/javascript"></script>
	<script src="assets/js/jquery.ambiance.js" type="text/javascript"></script>

    </head>

    <body style="margin-top: 0px; background-color: #eaeaea;background: url('assets/images/frame_lp8_bg.jpg'); ">

        <div style="text-align: left; width: 1080px; height: 1100px; margin: 0 auto; background: #ffffff url('assets/images/frame_lp8.jpg') no-repeat top left; position: relative;">

            <div style="position: relative; width: 572px; height: 323px; left: 95px; top: 275px;">
                <img id="vorschau" src="assets/images/vorschau-clip.jpg" onmouseover="hover(this);" onmouseout="unhover(this);" />
            </div>
            
            <div style="position: relative; width: 230px; height: 400px; left: 725px; top: 12px;">
	    
	    <?php include("actions/saveLead.php");
	    
	    if( $errorInAction['isAnError'] ){	    
		    ?>
		    <div style="width: 300px; background: #F68B00 none repeat scroll 0% 0%; color: #FFFFFF; display: block;position: fixed;top: 10px;right: 10px;z-index: 9999;" class="ambiance ambiance-default" id="errorMessageBox">
			<a href="#_" class="ambiance-close">×</a>
				<?=$errorInAction['message'];?>
		    </div>
		    <?php 
	    }
	    ?>
	    
	    <form action="" method="post">    <input type="hidden" name="transPostVars" value="true" />    <table border="0" cellspacing="0" cellpadding="0" style="width: 235px; font-family: Arial, Helvetica, sans-serif; font-size: 13px;">        <tr>            <td>                <select name="gender" id="gender" class="unnamed1">                    <option value="DV">Anrede</option>                    <option value="male">Herr</option>                    <option value="female">Frau</option>                </select>            </td>        </tr>        <tr>            <td>                 <input type="text" name="firstname" id="demo1" value="Vorname" onblur="if(this.value=='') this.value='Vorname';" onfocus="if(this.value=='Vorname') this.value='';"class="unnamed2" />            </td>        </tr>        <tr>            <td>                 <input type="text" name="lastname" id="lastname" value="Nachname" onblur="if(this.value=='') this.value='Nachname';" onfocus="if(this.value=='Nachname') this.value='';" class="unnamed2" />            </td>        </tr>        <!-- 
	<tr>            <td>                <select name="countrycode" id="countrycode" class="unnamed1a">                    <option value="DV">Landesvorwahl</option>                                            <option value="0049">0049 - Germany</option>                                            <option value="0043">0043 - Austria</option>                                            <option value="0041">0041 - Swiss</option>                                            <option value="001">001 - USA</option>                                            <option value="0044">0044 - Great Britain </option>                                            <option value="0034">0034 - Spain</option>                                            <option value="001">001 - Canada</option>                                            <option value="0031">0031 - The Netherlands</option>                                            <option value="0039">0039 - Italy</option>                                            <option value="0033">0033 - France</option>                                            <option value="007">007 - Russia</option>                                            <option value="0048">0048 - Poland</option>                                            <option value="0036">0036 - Hungary</option>                                            <option value="00421">00421 - Slovakia</option>                                            <option value="0032">0032 - Belgium</option>                                            <option value="0090">0090 - Turkey</option>                                            <option value="00352">00352 - Luxembourg</option>                                            <option value="00971">00971 - United Arab Emirates</option>                                            <option value="0061">0061 - Australia</option>                                            <option value="00357">00357 - Cyprus</option>                                            <option value="0042">0042 - Czech Republic</option>                                            <option value="0045">0045 - Denmark</option>                                            <option value="00372">00372 - Estonia</option>                                            <option value="0030">0030 - Greece</option>                                            <option value="0091">0091 - India</option>                                            <option value="00423">00423 - Liechtenstein</option>                                            <option value="00231">00231 - Liberia</option>                                            <option value="0052">0052 - Mexico</option>                                            <option value="0060">0060 - Malaysia</option>                                            <option value="00234">00234 - Nigeria</option>                                            <option value="0064">0064 - New Zealand</option>                                            <option value="00351">00351 - Portugal</option>                                            <option value="00595">00595 - Paraguay</option>                                            <option value="0046">0046 - Sweden</option>                                            <option value="0065">0065 - Singapore</option>                                            <option value="0066">0066 - Thailand</option>                                            <option value="0027">0027 - South Africa</option>                                            <option value="0063">0063 - Philippines</option>                                            <option value="00598">00598 - Uruguay</option>                                            <option value="00507">00507 - Panama</option>                                            <option value="0047">0047 - Norway</option>                                            <option value="0040">0040 - Romania</option>                                            <option value="00386">00386 - Slovenia</option>                                            <option value="00380">00380 - Ukraine</option>                                            <option value="00359">00359 - Bulgaria</option>                                    </select>            </td>        </tr> -->        <tr>            <td>                <!-- <input type="text" name="telprefix" id="telprefix" value="Vorwahl" onblur="if(this.value=='') this.value='Vorwahl';" onfocus="if(this.value=='Vorwahl') this.value='';" class="unnamed3" /> -->                <input type="text" name="telnumber" id="telnumber" value="Telefon" onblur="if(this.value=='') this.value='Telefon';" onfocus="if(this.value=='Telefon') this.value='';" class="unnamed4" />            </td>        </tr>        <tr>            <td>                 <input type="text" name="emailaddress" id="emailaddress" value="E-Mail" onblur="if(this.value=='') this.value='E-Mail';" onfocus="if(this.value=='E-Mail') this.value='';" class="unnamed2" />            </td>        </tr>        <tr><td><img src="assets/images/clearpixel.gif" height="10" /></td></tr>        <tr>            <td style="text-align: left;">                <input type="checkbox" name="datenschutz" />                <font size="1">                <span class="opt_text" id="datenschutz">                    <span class="opt_link">                        <a href="javascript:opwin('datenschutzbestimmungen.html')">Datenschutzbestimmungen</a>                    </span> gelesen                </span>                </font>            </td>        </tr>        <tr>             <td><img src="assets/images/clearpixel.gif" height="7" /></td>        </tr>        <tr>            <td>                <input type="hidden" name="agent" value="AB25245" />                <input type="submit" value="JETZT ANFORDERN" name="save_leads" class="button" alt="Absenden" />            </td>        </tr>    </table></form></div>

            <div class="footer">
                <div style="position: relative; width: 350px; height: 30px; margin: 0 auto;">
                                    </div>
                <span class="footer_link">
                    <a href="javascript:opwin('impressum.html');">Impressum</a> | <a href="javascript:opwin('datenschutzbestimmungen.html');">Datenschutzbestimmungen</a>
                </span>
            </div>

        </div>

        
 
        
            <script type="text/javascript">
                
                function hover(element) {
                    element.setAttribute('src', 'assets/images/video-anfordern.jpg');
                }
                function unhover(element) {
                    element.setAttribute('src', 'assets/images/vorschau-clip.jpg');
                }
                
                
            </script>
        

    </body>
</html>