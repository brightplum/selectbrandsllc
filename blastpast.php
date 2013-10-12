<?php

# blastpast.php
# Selectbrandsllc.com / Mumbobbqsauce.com
# Fredric Mitchell
# http://fredricjmitchell.com

# Import templating system
require_once( 'template.inc' );
require_once( 'main_template.inc' );

$template->header( 'Blast from the Past', $css, 0 );

?>

<br />
<p><font color="#003366" size="6" face="Arial">B</font><font color="#003366" size="5">LAST 
        FROM THE </font><font color="#003366" size="6">P</font><font color="#003366"><font size="5">AST</font></p>
      <table>
        <tr> 
          <td valign="top" background="../images/ExtraExtra.jpg">
		  <table>

              <tr> 
                <td width="345"> 
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p align="left"><img src="../images/small_ad1.gif" align="left" width="100" height="131" border="0" usemap="#Map"> 
                    <map name="Map">

                      <area shape="rect" coords="1,0,98,129" href="/html/blast_past_detail.html#ad1" target="blastpastdetail">
                    </map>
                    <img src="../images/small_ad2.gif" align="left" width="100" height="131" border="0" usemap="#Map2"> 
                    <map name="Map2">
                      <area shape="rect" coords="1,1,99,130" href="/html/blast_past_detail.html#ad2" target="blastpastdetail">
                    </map>
                    <img src="../images/small_ad3.gif" width="100" height="131" border="0" usemap="#Map3"> 
                    <map name="Map3">
                      <area shape="rect" coords="1,0,99,130" href="/html/blast_past_detail.html#ad3" target="blastpastdetail">
                    </map>

                  </p></td>
                <td width="315" valign="top"> 
                  <p class="nomargin"><br>
                    <iframe name="blastpastdetail" src="/html/blast_past_detail.html#ad1" frameborder="0" width="300" scrolling="no" height="410"></iframe>
                  </p></td>
              </tr>
            </table></td>
        </tr>
      </table>

<?php

$template->footer();

?>