<?php

# contestentryform.php
# Selectbrandsllc.com / Mumbobbqsauce.com
# Fredric Mitchell
# http://fredricjmitchell.com

# Import templating system
require_once( 'template.inc' );
require_once( 'main_template.inc' );

$template->header( 'Contest Entry Form', $css, 2 );

function error_message($msg) {
	echo "<SCRIPT>alert(\"Error: $msg\");history.go(-1)</SCRIPT>";
	exit;
}

  $name='';
  $title='';
  $company='';
  $address='';
  $city='';
  $state='';
  $zip='';
  $phone='';
  $fax='';
  $email='';
  $birthday='';
  $age='';
  $currentbrand='';
  $usage='';
  $reference='';
  $currentdist='';
  $comments='';
  $displayForm=true;
  if ($_POST){
    $name=stripslashes($_POST['name']);
    $address=stripslashes($_POST['address']);
    $city=stripslashes($_POST['city']);
    $state=stripslashes($_POST['state']);
    $zip=stripslashes($_POST['zip']);
    $phone=stripslashes($_POST['phone']);
    $fax=stripslashes($_POST['fax']);
    $email=stripslashes($_POST['email']);
    $birthday=stripslashes($_POST['birthday']);
    $age=stripslashes($_POST['age']);
    $purchaselocation=stripslashes($_POST['purchaselocation']);
    $upc=stripslashes($_POST['upc']);

    // validate e-mail address
    $valid=eregi('^([0-9a-z]+[-._+&])*[0-9a-z]+@([-0-9a-z]+[.])+[a-z]{2,6}$',$email);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$name);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$address);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$city);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$state);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$zip);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$phone);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$fax);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$birthday);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$age);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$purchaselocation);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$upc);

    $to='contest@selectbrandsllc.com';
    $messageSubject='Select Brands Contest Entry Form - ' . $name;
    $confirmationSubject='Contest Entry Confirmation: Selectbrandsllc.com';
    $confirmationBody="Thank you, " . $name . ", for requesting a sample from Select Brands.\r\nWe appreciate your business and will do our best to respond to your inquiry as soon as possible. Below is a copy of your details and your message:\r\n\r\n";
    if ($name && $address && $city && $state && $zip && $phone && $email && upc && $valid && !$crack){
        $all = $name . "\r\n";
	$all .= $address . "\r\n";
	$all .= $city . ", " . $state . " " . $zip . "\r\n";
	$all .= $phone . "\r\n";
	if(!empty($fax)) $all .= $fax . " (fax) \r\n";
	if(!empty($birthday)) $all .= "\r\nBirthday: " . $birthday . "\r\n";
	if(!empty($age)) $all .= "Age: " . $age . "\r\n";
	if(!empty($purchaselocation)) $all .= "\r\nPurchase Location: " .$purchaselocation . "\r\n";
	$all .= "UPC: " . $upc . " \r\n";

      if (mail($to,$messageSubject,$all,'From: '.$email."\r\n")
          && mail($email,$confirmationSubject,$confirmationBody.$all,'From: '.$to."\r\n")){
        $displayForm=false;

?>

<br />
<p><font color="#003366" size="6" face="Arial">T</font><font color="#003366"><font size="5" face="Arial">hank 
</font><font size="2" face="Arial"><font size="3"><font size="6">Y</font><font size="5">ou</font></font></font></font></p>
<p>Your message was successfully sent.</p>

<?php		
	}else{ // the messages could not be sent
error_message("Something went wrong when the server tried to send your message. This is usually due to a server error, and is probably not your fault. We apologise for any inconvenience caused.");
      }
    }else if ($crack){ // cracking attempt
error_message("Your message contained e-mail headers within the message body. This seems to be a cracking attempt and the message has not been sent.");
    }else{ // form not complete
error_message("Your message could not be sent. You must complete all fields and include both a valid e-mail address and a message.");
    }
  }
  if ($displayForm){
?>
<br />
<p><font color="#003366" size="6" face="Arial">C</font><font color="#003366"><font size="2" face="Arial"><font size="5">ONTEST 
        <font size="6">E</font>NTRY <font size="6">F</font>ORM</font></font></font></p></p>
		<form action="<?php echo $PHP_SELF ?>" method="post">
        <table border="0" cellpadding="3" cellspacing="3">
          <tr> 
            <td width="18%" valign="top"><div align="right"><font color="#000000" size="2" face="Arial">Name*</font></div></td>
            <td><input name="name" type="text" value="<?php echo htmlspecialchars($name); ?>" size="60"></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">Address*</font></div></td>
            <td><input name="address" type="text" value="<?php echo htmlspecialchars($address); ?>" size="60"></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">City*</font></div></td>
            <td> <input name="city" type="text" value="<?php echo htmlspecialchars($city); ?>">
			<font color="#000000" size="2" face="Arial">&nbsp;State* 
              <input name="state" type="text" value="<?php echo htmlspecialchars($state); ?>" size="10">
              </font><font color="#000000" size="2" face="Arial">&nbsp;Zip Code*<font color="#000000" size="2" face="Arial"> 
              <input name="zip" type="text" value="<?php echo htmlspecialchars($zip); ?>" size="10">
              </font> </font></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">Phone*</font></div></td>
            <td><input name="phone" type="text" value="<?php echo htmlspecialchars($phone); ?>">
			<font color="#000000" size="2" face="Arial">&nbsp;Fax<font color="#000000" size="2" face="Arial"> 
              <input name="fax" type="text" value="<?php echo htmlspecialchars($fax); ?>" size="14">
              </font></font></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">E-mail*</font></div></td>
            <td><input name="email" type="text" value="<?php echo htmlspecialchars($email); ?>" size="60"></td>
          </tr>
          <tr valign="top"> 
            <td> <div align="right"><font color="#000000" size="2" face="Arial">Birthday</font></div></td>
            <td><font color="#000000" size="2" face="Arial"> 
              <input name="birthday" type="text" value="<?php echo htmlspecialchars($birthday); ?>">
              Age <font color="#000000" size="2" face="Arial">
              <input name="age" type="text" value="<?php echo htmlspecialchars($age); ?>" size="4">
              </font></font></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">Where 
                did you</font><font size="2" face="Arial"><br>
                <font color="#000000">purchase Mumbo<sup>&reg;</sup><br>
                Sauce? </font></font></div></td>
            <td><input name="purchaselocation" type="text" value="<?php echo htmlspecialchars($purchaselocation); ?>" size="60"></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">Product 
                UPC Code*</font></div></td>
            <td><input name="upc" type="text" value="<?php echo htmlspecialchars($upc); ?>" size="60"></td>
          </tr>
        </table>
        <p align="right"> 
          <input type="submit" name="Submit" value="Submit">
        </p>
      </form>
<?php
}

$template->footer();

?>