<?php

# productinformation.php
# Selectbrandsllc.com / Mumbobbqsauce.com
# Fredric Mitchell
# http://fredricjmitchell.com

# Import templating system
require_once( 'template.inc' );
require_once( 'main_template.inc' );

$template->header( 'Product Information', $css, 1 );

?>

<br />
<p><font color="#003366" size="6" face="Arial">P</font><font color="#003366"><font size="2" face="Arial"><font size="5">RODUCT</font><font size="3"> 
        <font size="6">I</font><font size="5">NFORMATION</font></font></font></font></p>

      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td valign="top"><p align="justify"><font color="#000000" size="2" face="Arial">Our 
              premium homestyle barbecue sauces are made using only the finest 
              ingredients and a secret blend of ten aromatic spices and seasonings, 
              Mumbo<sup>&reg;</sup> Sauce contains: <strong>NO PRESERVATIVES &#8226; NO ARTIFICIAL 
              FLAVORS or COLORS &#8226; NO MSG</strong>. What&#8217;s more, Mumbo<sup>&reg;</sup> 
              Sauce has less sodium and fewer carbs than many sauces on the market.<br>
              <br>
              </font><font color="#000000" size="2" face="Arial">Delicious right 
              from the bottle, our tomato and vinegar base sauces are excellent 
              for grilling, dipping or spiking. So whether you&#8217;re cooking 
              indoors or out, one of our three savory flavors is sure to make 
              your tastebuds stand up and dance.</font></p>

            <table width="100%" border="0" cellpadding="5" cellspacing="5">
              <tr> 
                <td width="33%"><div align="center"><img src="../images/OriginalFlavor.jpg" width="195" height="160"></div></td>
                <td width="34%"><div align="center"><img src="../images/Hickory.jpg" width="195" height="160"></div></td>
                <td width="33%"><div align="center"><img src="../images/Tangy.jpg" width="195" height="160"></div></td>
              </tr>
              <tr valign="top"> 
                <td class="padding"><div align="justify"><font color="#000000" size="2" face="Arial">The 
                    signature sauce made famous at Argia B&#8217;s southside rib 
                    houses in Chicago. Mild yet zesty, great for dipping or as 
                    a flavor enhancer for other meat sauces.</font></div></td>
                <td class="padding"><div align="justify"><font color="#000000" size="2" face="Arial">A 
                    favorite of rib connoisseurs who enjoy a smooth smoky flavor 
                    and aroma, without a &#8220;harsh and ashy&#8221; after taste.</font></div></td>

                <td class="padding"><div align="justify"><font color="#000000" size="2" face="Arial">For 
                    those who want to kick it up a notch! Sweet and spicy with 
                    just enough heat, but not tongue numbing.</font></div></td>
              </tr>
            </table>
            <p align="right"><font color="#000000" size="2" face="Arial"><a href="order.php"><img src="../images/buynow.gif" width="98" height="31" border="0"></a></font></p>
            </td>
        </tr>
      </table>
            
<?php

$template->footer();

?>