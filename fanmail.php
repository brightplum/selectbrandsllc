<?php

# fanmail.php
# Selectbrandsllc.com / Mumbobbqsauce.com
# Fredric Mitchell
# http://fredricjmitchell.com

# Import templating system
require_once( 'template.inc' );
require_once( 'main_template.inc' );

$template->header( 'Fanmail', $css, 4 );

?>

<br />
<p><font color="#003366" size="6" face="Arial">F</font><font color="#003366"><font size="2" face="Arial"><font size="5">ANMAIL</font></font></font></p>

	<div> 
		<iframe name="fanmail_detail" src="/html/fanmail_detail.html#1" frameborder="0" width="610" scrolling="no" height="400"></iframe>
    </div>
	
	<table width="109" border="1" cellpadding="1" cellspacing="1" bgcolor="#CC0000">
        <tr>
          <td><div align="center"><a href="mailto:fanmail@selectbrandsllc.com"><font color="#FFFFFF" size="2" face="Arial">Share 
              your comments</font></a></div></td>
        </tr>
      </table>

<?php

$template->footer();

?>