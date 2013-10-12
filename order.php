<?php

# order.php
# Selectbrandsllc.com / Mumbobbqsauce.com
# Fredric Mitchell
# http://fredricjmitchell.com

# Import templating system
require_once( 'template.inc' );
require_once( 'main_template.inc' );

$template->header( 'Order Online', $css, 99 );

?>

<script type = "text/javascript" 
        src  = "js/randlib.js">
		// hash code from http://members.aol.com/paypalhelper/hasher.html
</script>
<script type="text/javascript">
<!-- 
// coupon code pulled from http://members.aol.com/paypalhelper/simpcoup.html
var discnt = 0;   // no default percent discount

var coupons = new Array (  // place to put coupon codes
  "c43fc84e43e4a62f",      // 1st coupon hash - comma seperated
  "coup2",                 // 2nd coupon hash - add all you want
  "coup3"                  // 3rd coupon hash
);
var coupdc  = new Array (  // place to put discounts for coupon vals
  15,
  15,
  15
);
var coupval = "(blanket)"; // what user entered as coupon code

function ChkCoup () {      // check user coupon entry
var i,cv=Hash2(FixUTF(Conv(coupval)),8,1);  // calc hash of input
  discnt = 0;              // assume the worst
  for (i=0; i<coupons.length; i++) {
    if (cv == coupons[i]) {
      discnt = coupdc[i];  // remember the discount amt
      alert ("Valid coupon code! \n\n" + discnt + 
             "% discount now in effect.");
      return;
    }
  }
  alert ("'" + coupval + "'  is not a valid code!");
}

function Dollar (val) {     // force to valid dollar amount
var str,pos,rnd=0;
  if (val < .995) rnd = 1;  // for old Netscape browsers
  str = escape (val*1.0 + 0.005001 + rnd);  // float, round, escape
  pos = str.indexOf (".");
  if (pos > 0) str = str.substring (rnd, pos + 3);
  return str;
}

function ReadForm (obj1) {  // apply the discount
var amt,des;
  amt = obj1.baseamt.value*1.0;       // base amount
  des = obj1.basedes.value;           // base description

  if (discnt > 0) {                   // only if discount is active
    amt = Dollar (amt - (amt * discnt/100.0));
    des = des + ", " + discnt + "% dis, COUP = " + coupval;
  }

  obj1.amount.value = Dollar (amt);
  obj1.item_name.value = des;
}
//-->
</script>

<br />
<p width="660"><font color="#003366" size="6" face="Arial">O</font><font size="5" color="#003366" face="Arial">rder</font>
        <font color="#003366" size="6" face="Arial">O</font><font size="5" color="#003366" face="Arial">nline</font>
<table border="1" class="form">

  <tr>
	<td colspan="4" class="blue">Thank you for purchasing Mumbo<sup>&reg;</sup><span class="small">&reg;</span> Sauce. We know that you will enjoy the delectable, mouthwatering flavor that our 
sauces offer. Remember, our Mumbo<sup>&reg;</sup> 3-packs and 6-packs make great gifts for the barbecue enthusiast on your gift list. We use Paypal to securely process all of our credit card transactions. You do not need a Paypal account to use 
this payment feature. To order, select the pack size and flavor combinations that you desire.<br />
	</td>
  </tr>
  <tr>
   <td colspan="4">

<table width="100%" border="1">
  <tr>
   <td id="eighteenounce">&nbsp;</td>
   <td id="sixtyfourounce">&nbsp;</td>
  </tr>
  <tr class="trblue">
  	<td>18 ounce bottle</td>
  	<td>64 ounce bottle</td>
  </tr>
</table>

   </td>
  </tr>
  <tr class="trred">
  	<td colspan="4">Order Here</td>
  </tr>  
  <tr>
   <td>

<table class="form">
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" onsubmit="this.target = 'paypal'; return ReadForm (this);">
  <!-- <tr><td colspan="2"><center><img src="3pk_original_small.png" /></center></td></tr> -->
  <tr>
    <td colspan="2" class="boldunder">Mumbo<sup>&reg;</sup> Sauce - 3 pack
    </td>
  </tr>
  <tr>
    <td valign="middle">
      <input type="hidden" name="on0" value="Flavor">Flavor: 
    </td>
    <td><select name="os0"><option value="Mumbo Original">Mumbo<sup>&reg;</sup> Original<option value="Mumbo Hickory">Mumbo<sup>&reg;</sup> Hickory<option value="Mumbo Tangy(Hot)">Mumbo<sup>&reg;</sup> Tangy(Hot)<option value="Mixed Pack">Mixed Pack</select>
    </td>
  </tr>
  <tr>
    <td>Price:</td>
	<td>$15.00</td>
  </tr>
  <tr>
    <td>S&H: </td>
	<td>&nbsp;&nbsp;$8.00</td>
  </tr>
  <tr>
    <td>Qty:</td>
	<td><input name="quantity" type="text" value="1" size="2"></td>
  </tr>
  <tr>
	<td>			
		Promo code:
	</td>
	<td>
		<input type     = "text" 
				size     = "5"
				name     = "coupcode"; />
		<input type="button" value="Apply" 
		onclick="coupval = this.form.coupcode.value;
		ChkCoup();" />
	</td>
  </tr>
  <tr>
    <td colspan="2">
	<center>
	<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
	<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
	<input type="hidden" name="cmd" value="_cart" />
	<input type="hidden" name="add" value="1">
	<input type="hidden" name="cmd" value="_cart">
	<input type="hidden" name="business" value="orders@selectbrandsllc.com">
	<input type="hidden" name="item_name" value="Mumbo Sauce - 3 pack">
	
	<input type="hidden" name="amount" value="15.00">
	<input type="hidden" name="baseamt" value="15.00" />
	<input type="hidden" name="basedes" value="Mumbo Sauce - 3 pack" />
	
	<input type="hidden" name="shipping" value="8.00">
	<input type="hidden" name="shipping2" value="8.00">
	<input type="hidden" name="no_shipping" value="2">
	<input type="hidden" name="no_note" value="1">
	<input type="hidden" name="currency_code" value="USD">
	<input type="hidden" name="lc" value="US">	
	<input type="hidden" name="bn" value="PP-ShopCartBF">
	</center>
	</td>
  </tr>
  </form>
</table>

</td>
<td>

<table class="form">
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" onsubmit="this.target = 'paypal'; return ReadForm (this);">
  <!-- <tr><td colspan="2"><center><img src="6pk_original_small.png" /></center></td></tr> -->
  	<tr><td colspan="2" class="boldunder">Mumbo<sup>&reg;</sup> Sauce - 6 pack</td></tr>
  	<tr><td valign="middle">
		<input type="hidden" name="on0" value="Flavor">Flavor:</td><td><select name="os0"><option value="Mumbo Original">Mumbo<sup>&reg;</sup> Original<option value="Mumbo Hickory">Mumbo<sup>&reg;</sup> Hickory<option value="Mumbo Tangy(Hot)">Mumbo<sup>&reg;</sup> Tangy(Hot)<option value="Mixed Pack">Mixed Pack</select></td></tr>
  	<tr><td>Price:</TD><td>$24.00</td></tr>
  	<tr><td>S&H: </td><td>$12.00</td></tr>
  	<tr><td>Qty:</td><td><input name="quantity" type="text" value="1" size="2"></td></tr>
	<tr>
	<td>			
		Promo code:
	</td>
	<td>
		<input type     = "text" 
				size     = "5"
				name     = "coupcode"; />
		<input type="button" value="Apply" 
		onclick="coupval = this.form.coupcode.value;
		ChkCoup();" />
	</td>
  </tr>
	<tr>
	<td colspan="2">
	<center>
		<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
		<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
		<input type="hidden" name="add" value="1">
		<input type="hidden" name="cmd" value="_cart">
		<input type="hidden" name="business" value="orders@selectbrandsllc.com">
		<input type="hidden" name="item_name" value="Mumbo Sauce - 6 pack">
		
		<input type="hidden" name="amount" value="24.00">
		<input type="hidden" name="baseamt" value="24.00" />
		<input type="hidden" name="basedes" value="Mumbo Sauce - 6 pack" />
		
		<input type="hidden" name="shipping" value="12.00">
		<input type="hidden" name="shipping2" value="12.00">
		<input type="hidden" name="no_shipping" value="2">
		<input type="hidden" name="no_note" value="1">
		<input type="hidden" name="currency_code" value="USD">
		<input type="hidden" name="lc" value="US">
		<input type="hidden" name="bn" value="PP-ShopCartBF">
	</center>
	</td>
	</tr>
	</form>
</table>

</td>
<td>
<table class="form">
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" onsubmit="this.target = 'paypal'; return ReadForm (this);">
  <!-- <tr><td colspan="2"><center><img src="12pk_original_small.png" /></center></td></tr> -->
  <tr><td colspan="2" class="boldunder">Mumbo<sup>&reg;</sup> Sauce - 12 pack</td></tr>
  <tr><TD valign="middle">
	<input type="hidden" name="on0" value="Flavor">Flavor:</td><td><select name="os0"><option value="Mumbo Original">Mumbo<sup>&reg;</sup> Original<option value="Mumbo Hickory">Mumbo<sup>&reg;</sup> Hickory<option value="Mumbo Tangy(Hot)">Mumbo<sup>&reg;</sup> Tangy(Hot)<option value="Mixed Pack">Mixed Pack</select></td></tr>
  <tr><td>Price:</td><td>$37.00</td></tr>
    <tr><td>S&H:</td><td>$15.00</td></tr>
  <tr><td>Qty:</td><td><input name="quantity" type="text" value="1" size="2"></td></tr>
	<tr>
	<td>			
		Promo code:
	</td>
	<td>
		<input type     = "text" 
				size     = "5"
				name     = "coupcode"; />
		<input type="button" value="Apply" 
		onclick="coupval = this.form.coupcode.value;
		ChkCoup();" />
	</td>
	</tr>
	<tr>
	<td colspan="2">
	<center>
		<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
		<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
		<input type="hidden" name="add" value="1">
		<input type="hidden" name="cmd" value="_cart">
		<input type="hidden" name="business" value="orders@selectbrandsllc.com">
		<input type="hidden" name="item_name" value="Mumbo Sauce - 12 pack">
		
		<input type="hidden" name="amount" value="37.00">
		<input type="hidden" name="baseamt" value="37.00" />
		<input type="hidden" name="basedes" value="Mumbo Sauce - 12 pack" />
		
		<input type="hidden" name="shipping" value="15.00">
		<input type="hidden" name="shipping2" value="15.00">
		<input type="hidden" name="no_shipping" value="2">
		<input type="hidden" name="no_note" value="1">
		<input type="hidden" name="currency_code" value="USD">
		<input type="hidden" name="lc" value="US">
		<input type="hidden" name="bn" value="PP-ShopCartBF">
	</center>
	</td>
	</tr>
	</form>
</table>

</td>
</tr>
<tr>
	<td>
	
<table class="form">
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" onsubmit="this.target = 'paypal'; return ReadForm (this);" />
  <!-- <tr><td colspan="2"><center><img src="halfgallon_original_small.png" /></center></td></tr> -->
  <tr><td colspan="2" class="boldunder">Mumbo<sup>&reg;</sup> Sauce - 64 Ounce</td></tr>
  <tr>
  <td valign="middle"><input type="hidden" name="on0" value="Flavor">Flavor:
  </td>
  <td><select name="os0"/><option value="Mumbo Original">Mumbo<sup>&reg;</sup> Original<option value="Mumbo Hickory">Mumbo<sup>&reg;</sup> Hickory</select>
  </td>
  </tr>
  	<tr>
  		<td>Price:</td>
  		<td>$12.00</td>
  	</tr>
  	<tr>
  		<td>S&H: </td>
  		<td>$8.00</td>
  	</tr>
  	<tr>
  		<td>Qty:</td><td><input name="quantity" type="text" value="1" size="2"></td>
  	</tr>
	<tr>
	<td>			
		Promo code:
	</td>
	<td>
		<input type     = "text" 
				size     = "5"
				name     = "coupcode"; />
		<input type="button" value="Apply" 
		onclick="coupval = this.form.coupcode.value;
		ChkCoup();" />
	</td>
	</tr>
  	<tr>
  		<td colspan="2">
  		<center><input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
		<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
		<input type="hidden" name="add" value="1">
		<input type="hidden" name="cmd" value="_cart">
		<input type="hidden" name="business" value="orders@selectbrandsllc.com">
		<input type="hidden" name="item_name" value="Mumbo Sauce - 64 Ounce">
		
		<input type="hidden" name="amount" value="12.00">
		<input type="hidden" name="baseamt" value="12.00" />
		<input type="hidden" name="basedes" value="Mumbo Sauce - 64 ounce" />
		
		<input type="hidden" name="shipping" value="8.00">
		<input type="hidden" name="shipping2" value="8.00">
		<input type="hidden" name="no_shipping" value="2">
		<input type="hidden" name="no_note" value="1">
		<input type="hidden" name="currency_code" value="USD">
		<input type="hidden" name="lc" value="US">
		<input type="hidden" name="bn" value="PP-ShopCartBF">
		</center>
		</td>
	</tr>
	</form>
</table>

	</td>
	<td colspan="2" align="right">
		<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post"/>
		*Special S&H: &nbsp; <input name="amount" type="text" size="5">&nbsp;
		<button type="submit" name="submit">Apply</button>
		<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
		<input type="hidden" name="add" value="1">
		<input type="hidden" name="cmd" value="_cart">
		<input type="hidden" name="business" value="orders@selectbrandsllc.com">
		<input type="hidden" name="item_name" value="Specialized Shipping">
		<input type="hidden" name="currency_code" value="USD">
		<input type="hidden" name="lc" value="US">
		<input type="hidden" name="bn" value="PP-ShopCartBF">
		</form>
	</td>
</tr>
<tr>
  <td colspan="4" class="small_text">10.25% sales tax applied to purchases in Illinois. 
  	S&H charges apply to purchases within the contiguous U.S. <br />*Outside of the U.S, please contact us at 
	customerservice@selectbrandsllc.com for appropriate shipping & handling charges.
  </td>
</tr>
<tr>
  <td colspan="2" class="fiftypercent text-left">
  <a target="_blank" href="https://www.paypal.com/us/verified/pal=orders%40selectbrandsllc%2ecom">
  <img border="0" alt="Official PayPal Seal" src="http://www.paypal.com/en_US/i/icon/verification_seal.gif"/></a>
  </td>
  <td colspan="2" class="fiftypercent text-left">
	<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_cart">
	<input type="hidden" name="business" value="orders@selectbrandsllc.com">
	<input type="image" src="https://www.paypal.com/en_US/i/btn/view_cart.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
	<input type="hidden" name="display" value="1">
	</form>
  </td>
</tr>
<tr>
	<td colspan="2" class="blue marginpad">If you would prefer to mail in your payment, please fill out the order form above, then <a href='javascript:;' onClick='window.print();return false' class="red">print it here</a>.
	</td>
	<td colspan="2" class="marginpad">
		<p class="boldunder">Send payment to:</p>
		<p>Select Brands LLC<br />
		P.O.Box 199361<br /> 
		Chicago, Illinois 60619<br />
		</p>
	</td>	
</tr>
</table>
</p>

<?php

$template->footer();

?>