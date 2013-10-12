<?php

# main_template.inc
# Selectbrandsllc.com / Mumbobbqsauce.com
# Bright Plum
# http://brightplum.com

# Import template engine
require_once( 'template.inc' );

# Import menu functions
# require_once( 'misc.inc' );

$template = new Template();
# Create template

# header
$header_xhtml = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1.1.dtd">
<html>
<head>
<title>{TITLE}Select Brands | Home of the Mumbo<sup>&reg;</sup> BBQ Sauce</title>
<meta http-equiv="content-type" content="Content-Type: text/html; charset=iso-8859-1" />
<meta name="description" content="For nearly 50 years, Mumbo Bar-B-Q Sauce has been the only choice for rib lovers both near and far. 
	Carefully blended using all natural ingredients and a time honored recipe, Mumbo Bar-B-Q Sauce brings out the pure homestyle flavor in 
	everything you grill - ribs, chops, chicken, burgers, sausages, even fish. " />
<meta name="keywords" content="southern style, barbecue sauce, chicago style, rib joint, family reunion, cook out, lighter fluid, 
	hickory chips, hickory smoke, tail gate, superbowl party, hot links, rib tips, baby back, baby back ribs, beef ribs, spare ribs, 
	st. louis style ribs, seafood, steak house, memorial day, fourth of July, July 4th, veteran's day, Easter, Christmas gift, father's day, 
	pulled pork, barbecue beef, picnic basket, bon fire, back yard, summer time, rib rub, baked beans, potato salad, camp fire, hot dogs, 
	cole slaw, black history, african american, family history, gift basket, soul food, all natural, low sodium, sauce, barbecue, 
	bbq, bar-b-que, bar-b-q, american, mississippi, texas, chicago, ribs, chicken, fish, meat, seasoning, tomato, cook, grill, grilling, 
	charcoal, fire, hickory, tangy, condiment, dip, salsa, super bowl, party, picnic, recipe, pork, beef, poultry, shrimp,links, sausages, 
	slab, burgers, spicy, birthday, flag, summer, spring, hot, sweet, spaghetti, chili, marinade spices, pit, smoker, ice, cola, ethnic, 
	diversity, rub, rubs, chipotle, america, flavor, southern, south, joint, afro, afrocentric, appetizer,family, restaurant, midwest, 
	entrepreneur, grocery, groceries, coupon, cajun, mambo, samba, gift, natural" />
<meta name="verify-v1" content="HGpK6XnYs4H6rCDpoyuJo13WFHjTIl1n2hLYVo54N2g=" />
{CSS}
<link rel="stylesheet"
   type="text/css"
   media="print" href="/css/print.css" />
</head>
<body>
<div id="container">
	<div id="header"></div>
	<div id="wrapper">
		<table>
			<tr>
			<td id="navigation">
			<dl class="small text-center menu">
				<dt class="menu"><a href="/" class="null">Home&nbsp;&raquo;</a></dt>

					<dd class="menu">
					<ul>
						<li><a href="/index.php">Introduction</a></li>
						<li><a href="/companyhistory.php">Company History</a></li>
						<li><a href="/blastpast.php">Blast from the Past</a></li>
					</ul>
					</dd>

				<dt class="menu"><a href="/productinformation.php" class="null">Product Information&nbsp;&raquo;</a></dt>
					<dd class="menu">
					<ul>
						<li><a href="/productinformation.php">Product Information</a></li>
						<li><a href="/nutrition.php">Nutrition Information</a></li>
					</ul>
					</dd>
				<dt class="menu"><a href="/recipes.php" >Recipes</a></dt>

				<dt class="menu"><a href="/stores.php">Store Locations</a></dt>
				<dt class="menu"><a href="/coupons.php" class="null">Coupons & Contests&nbsp;&raquo;</a></dt>
					<dd class="menu">
					<ul>
						<li><a href="/coupons.php">Coupons</a></li>
						<li><a href="/contests.php">Contests</a></li>
						<li><a href="/contestentryform.php">Contest Entry Form</a></li>

						<li><a href="/contestrules.php">Contest Rules</a></li>
					</ul>
					</dd>
				<dt class="menu"><a href="/food_service.php" class="null">Food Service & Distributors&nbsp;&raquo;</a></dt>
					<dd class="menu">
					<ul>
						<li><a href="/food_service.php">Food Service & Distributors</a></li>
						<li><a href="/dist_contacts.php">Distributor Contacts</a></li>
						<li><a href="/wholesale.php">Order Online</a></li>
						<li><a href="/sampleform.php" >Order Samples</a></li>
					</ul>
					</dd>
				<dt class="menu"><a href="/fanmail.php" >Fan Mail</a></dt>
				<dt class="menu"><a href="/inthenews.php" >In the News</a></dt>
				<!--<dt class="menu"><a href="/locations.php" >Store Locations</a></dt>-->

				<!--<dt class="menu"><a href="/sampleform.php" >Order Samples</a></dt>-->
				<dt class="menu"><a href="/order.php">Order Online</a></dt>
				<dt class="menu"><a href="/contact_us.php">Contact Us</a></dt>
				<!--<dt class="menu"><a href="/links.php">Links</a></dt>-->
			</dl>
		</td>
		<td id="content">
EOD;

# set header
$template->set_header( $header_xhtml );

# footer
$footer_xhtml = <<<EOD
		</td>
	</tr>
	</table>
	</div>
	<div class="tiny trademark">Mumbo<sup>&reg;</sup> Sauce is a proprietary brand of Select Brands LLC Chicago, Illinois and is a registered trademark in the U.S Patent and Trademark Office.</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="/js/scripts.js"></script>
<script src="/js/jquery.calculation.js"></script>
<script src="/js/jquery.field.js"></script>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-3044151-1";
urchinTracker();
</script>
</body>
</html>
EOD;
		
# set footer
$template->set_footer( $footer_xhtml );

# CSS
$css = array( 'main.css' );


?>