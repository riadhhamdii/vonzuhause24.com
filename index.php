﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	    
	    <form action="" method="post">
	<tr>

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