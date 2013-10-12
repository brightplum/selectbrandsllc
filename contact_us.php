<?php

# contact_us.php
# Selectbrandsllc.com / Mumbobbqsauce.com
# Fredric Mitchell
# http://fredricjmitchell.com

# Import templating system
require_once( 'template.inc' );
require_once( 'main_template.inc' );

$template->header( 'Contact Us', $css, 99 );

function error_message($msg) {
	echo "<SCRIPT>alert(\"Error: $msg\");history.go(-1)</SCRIPT>";
	exit;
}

  $name='';
  $address='';
  $city='';
  $state='';
  $zip='';
  $phone='';
  $email='';
  $message='';
  $displayForm=true;
  if ($_POST){
    $name=stripslashes($_POST['name']);
    $address=stripslashes($_POST['address']);
    $city=stripslashes($_POST['city']);
    $state=stripslashes($_POST['state']);
    $zip=stripslashes($_POST['zip']);
    $phone=stripslashes($_POST['phone']);
    $email=stripslashes($_POST['email']);
    $message=stripslashes($_POST['message']);
    // validate e-mail address
    $valid=eregi('^([0-9a-z]+[-._+&])*[0-9a-z]+@([-0-9a-z]+[.])+[a-z]{2,6}$',$email);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$name);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$address);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$city);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$state);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$zip);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$phone);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$message);
    $to='customerservice@selectbrandsllc.com';
    $messageSubject='From: Selectbrandsllc.com - ' . $name;
    $confirmationSubject='Confirmation: Selectbrandsllc.com';
    $confirmationBody="Thank you, " . $name . ", for contacting Select Brands LLC with your message.\r\nWe appreciate your business and will do our best to respond to your inquiry as soon as possible. Below is a copy of your details and your message:\r\n\r\n";
    if ($name && $address && $city && $state && $zip && $phone && $email && $message && $valid && !$crack){
        $all = $name . "\r\n";
	$all .= $address . "\r\n";
	$all .= $city . ", " . $state . " " . $zip . "\r\n";
	$all .= $phone . "\r\n\r\n";
	$all .= $message;
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
<p><font color="#003366" size="6" face="Arial">C</font><font color="#003366"><font size="5" face="Arial">ONTACT 
        </font><font size="2" face="Arial"><font size="3"><font size="6">U</font><font size="5">S</font></font></font></font></p>
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td valign="top"><table width="100%" border="0" cellpadding="3" cellspacing="3">
              <tr valign="top"> 
                <td> 
                  <p><font color="#000000" size="2" face="Arial"><font color="#333333" size="3">Select 
                    Brands LLC<br>
                    P.O. Box 199361<br>
                    Chicago, IL 60619<br>
                    773-994-8889 phone<br>
                    773-994-8974 fax</font></font></p>
                  <p><font color="#333333" size="3" face="Arial">Mumbo<sup>&reg;</sup> is 
                    a registered<br>
                    trademark of <br>
                    Select Brands LLC</font></p>
            </td>
                <td><font color="#000000" size="2" face="Arial">
                  <form action="<?php echo $PHP_SELF ?>" method="post">
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr> 
      <td width="64" valign="top"><div align="left"><font color="#000000" size="2" face="Arial">Name:</font></div></td>
      <td> <input name="name" type="text" id="name" value="<?php echo htmlspecialchars($name); ?>" size="40"> </td>
    </tr>
    <tr> 
      <td valign="top"><div align="left"><font color="#000000" size="2" face="Arial">Address</font><font size="2" face="Arial">:</font></div></td>
      <td><input name="address" type="text" id="address" value="<?php echo htmlspecialchars($address); ?>" size="40"></td>
    </tr>
    <tr> 
      <td valign="top"><div align="left"><font color="#000000" size="2" face="Arial">City</font><font size="2" face="Arial">:</font></div></td>
      <td><input name="city" type="text" id="city" value="<?php echo htmlspecialchars($city); ?>" size="20"> <font color="#000000" size="2" face="Arial">State</font><font size="2" face="Arial">:</font> 
          <input name="state" type="text" id="state" value="<?php echo htmlspecialchars($state); ?>" size="5"> <font color="#000000" size="2" face="Arial">Zip</font><font size="2" face="Arial">:</font> 
          <input name="zip" type="text" id="zip" value="<?php echo htmlspecialchars($zip); ?>" size="5">
     </td>
    </tr>
    <tr> 
      <td valign="top"><div align="left"><font color="#000000" size="2" face="Arial">Phone</font><font size="2" face="Arial">:</font></div></td>
      <td><input name="phone" type="text" id="phone" value="<?php echo htmlspecialchars($phone); ?>"></td>
    </tr>
    <tr> 
      <td valign="top"><div align="left"><font color="#000000" size="2" face="Arial">E-mail</font><font size="2" face="Arial">:</font></div></td>
      <td><input name="email" type="text" id="email" value="<?php echo htmlspecialchars($email); ?>"></td>
    </tr>
    <tr> 
      <td valign="top"><div align="left"><font color="#000000" size="2" face="Arial">Message</font><font size="2" face="Arial">:</font></div></td>
      <td><p> 
            <textarea name="message" cols="40" rows="5" id="message"><?php echo htmlspecialchars($message); ?></textarea>
          </p>
          <p align="center"> 
            <input type="submit" name="Submit" value="Submit">
          </p>
      </td>
    </tr>
  </table>
</form>
<?php
}

$template->footer();

?>