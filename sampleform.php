<?php

# sampleform.php
# Selectbrandsllc.com / Mumbobbqsauce.com
# Fredric Mitchell
# http://fredricjmitchell.com

# Import templating system
require_once( 'template.inc' );
require_once( 'main_template.inc' );

$template->header( 'Sample Form', $css, 3 );

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
  $type='';
  $taxid='';
  $currentbrand='';
  $usage='';
  $reference='';
  $currentdist='';
  $comments='';
  $displayForm=true;
  if ($_POST){
    $name=stripslashes($_POST['name']);
    $title=stripslashes($_POST['title']);
    $company=stripslashes($_POST['company']);
    $address=stripslashes($_POST['address']);
    $city=stripslashes($_POST['city']);
    $state=stripslashes($_POST['state']);
    $zip=stripslashes($_POST['zip']);
    $phone=stripslashes($_POST['phone']);
    $fax=stripslashes($_POST['fax']);
    $email=stripslashes($_POST['email']);
    $type=stripslashes($_POST['type']);
    $taxid=stripslashes($_POST['taxid']);
    $currentbrand=stripslashes($_POST['currentbrand']);
    $usage=stripslashes($_POST['usage']);
    $reference=stripslashes($_POST['reference']);
    $currentdist=stripslashes($_POST['currentdist']);
    $comments=stripslashes($_POST['comments']);
    // validate e-mail address
    $valid=eregi('^([0-9a-z]+[-._+&])*[0-9a-z]+@([-0-9a-z]+[.])+[a-z]{2,6}$',$email);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$name);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$title);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$company);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$address);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$city);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$state);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$zip);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$phone);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$fax);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$type);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$taxid);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$currentbrand);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$usage);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$reference);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$currentdist);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$comments);
    $to='samples@selectbrandsllc.com';
    $messageSubject='Select Brands Sample Form - ' . $name;
    $confirmationSubject='Sample Request Confirmation: Selectbrandsllc.com';
    $confirmationBody="Thank you, " . $name . ", for requesting a sample from Select Brands.\r\nWe appreciate your business and will do our best to respond to your inquiry as soon as possible. Below is a copy of your details and your message:\r\n\r\n";
    if ($name && $company && $address && $city && $state && $zip && $phone && $email && $taxid && $valid && !$crack){
        $all = $name . "\r\n";
	if(!empty($title)) $all .= $title . "\r\n";
	$all .= $company . "\r\n";
	$all .= $address . "\r\n";
	$all .= $city . ", " . $state . " " . $zip . "\r\n";
	$all .= $phone . "\r\n";
	if(!empty($fax)) $all .= $fax . " (fax) \r\n";
	if(!empty($type)) $all .= "\r\n" . $type . "\r\n";
	$all .= "Tax ID: " . $taxid . "\r\n";
	if(!empty($currentbrand)) $all .= "\r\nCurrent Brand: " .$currentbrand . "\r\n";
	if(!empty($usage)) $all .= "Monthly Usage: " . $usage . " (in gallons) \r\n";
	if(!empty($reference)) $all .= "Referring Source: " . $reference . "\r\n";
	if(!empty($currentdist)) $all .= "Current Distributor: " .$currentdist . "\r\n";
	if(!empty($comments)) $all .= "Additional Comments: " . $comments . "\r\n";
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
<p><font color="#003366" size="6" face="Arial">S</font><font color="#003366"><font size="2" face="Arial"><font size="5">AMPLE</font><font size="3"> 
        <font size="6">F</font><font size="5">ORM</font></font></font></font></p>
        <p class="small italic">Samples
are available only to verifiable retail grocery, food service, food
wholesale and restaurant business owners.</p>
      <form action="<?php echo $PHP_SELF ?>" method="post">
        <table border="0" cellpadding="3" cellspacing="3">
          <tr> 
            <td width="20%" valign="top"> <div align="right"><font color="#000000" size="2" face="Arial">Name*</font></div></td>
            <td colspan="2" valign="top"> <input name="name" type="text" value="<?php echo htmlspecialchars($name); ?>" size="60"></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">Title</font></div></td>
            <td colspan="2" valign="top"> <input name="title" type="text" value="<?php echo htmlspecialchars($title); ?>" size="60"></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">Company*</font></div></td>
            <td colspan="2" valign="top"> <input name="company" type="text" value="<?php echo htmlspecialchars($company); ?>" size="60"></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">Address*</font></div></td>
            <td colspan="2" valign="top"> <input name="address" type="text" value="<?php echo htmlspecialchars($address); ?>" size="60"></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">City*</font></div></td>
            <td colspan="2" valign="top"> <input name="city" type="text" value="<?php echo htmlspecialchars($city); ?>"> 
              <font color="#000000" size="2" face="Arial">State* 
              <input name="state" type="text" value="<?php echo htmlspecialchars($state); ?>" size="6">
              </font><font color="#000000" size="2" face="Arial">Zip Code* <font color="#000000" size="2" face="Arial"> 
              <input name="zip" type="text" value="<?php echo htmlspecialchars($zip); ?>" size="9">
              </font> </font></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">Phone*</font></div></td>
            <td colspan="2" valign="top"> <input name="phone" type="text" value="<?php echo htmlspecialchars($phone); ?>"> 
              <font color="#000000" size="2" face="Arial">Fax<font color="#000000" size="2" face="Arial"> 
              <input name="fax" type="text" value="<?php echo htmlspecialchars($fax); ?>" size="13">
              </font></font></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">E-mail*</font></div></td>
            <td colspan="2" valign="top"> <input name="email" type="text" value="<?php echo htmlspecialchars($email); ?>" size="60"></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">Type 
                of Business</font></div></td>
            <td colspan="2" valign="top"> <input name="type" type="text" value="<?php echo htmlspecialchars($type); ?>"> 
              <font color="#000000" size="2" face="Arial">Tax ID*</font><font color="#000000" size="2" face="Arial"><font color="#000000" size="2" face="Arial"> 
              <input name="taxid" type="text" value="<?php echo htmlspecialchars($taxid); ?>" size="28">
              </font></font></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">Current 
                Brand of BBQ sauce</font></div></td>
            <td colspan="2" valign="top"> <input name="currentbrand" type="text" value="<?php echo htmlspecialchars($currentbrand); ?>"> 
              <font color="#000000" size="2" face="Arial">Monthly usage (in gallons)</font><font color="#000000" size="2" face="Arial"><font color="#000000" size="2" face="Arial"> 
              <input name="usage" type="text" value="<?php echo htmlspecialchars($usage); ?>" size="10">
              </font></font></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">How 
                did you hear about Mumbo<sup>&reg;</sup> Bar-B-Q Sauce</font></div></td>
            <td width="34%" valign="top"> <textarea name="reference" rows="5"><?php echo htmlspecialchars($reference); ?></textarea>
            </td>
            <td width="46%" valign="top"> <div align="left"><font color="#000000" size="2" face="Arial">Current 
                distributor/supplier? </font></div>
              <font color="#000000" size="2" face="Arial"><font color="#000000" size="2" face="Arial"> 
              <textarea name="currentdist" cols="17" rows="4"><?php echo htmlspecialchars($currentdist); ?></textarea>
              </font></font></td>
          </tr>
          <tr> 
            <td valign="top"><div align="right"><font color="#000000" size="2" face="Arial">Comments</font></div></td>
            <td valign="top"><textarea name="comments" rows="5"><?php echo htmlspecialchars($comments); ?></textarea></td>
			<td><input type="submit" name="Submit" value="Submit"></td>
          </tr>
        </table>
      </form>
<?php
}

$template->footer();

?>