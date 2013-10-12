<?php

# inthenews.php
# Selectbrandsllc.com / Mumbobbqsauce.com
# Fredric Mitchell
# http://fredricjmitchell.com

# Import templating system
require_once( 'template.inc' );
require_once( 'main_template.inc' );

$template->header( 'In the News', $css, 99 );

?>

<br />
<p><font color="#003366" size="6" face="Arial">I</font><font color="#003366"><font size="2" face="Arial"><font size="5">N THE NEWS</font></font></font></p>

	<div>
		<ul>
			<li><a href="http://www.chicagotribune.com/business/smallbusiness/chi-0705180939may22,0,5290116.story?coll=chi-businesssmallbusiness-hed">Adding Sizzle to the Grill</a> - Chicago Tribune (May 22, 2007)</li>
			<li><a href="http://www.beepcentral.com/story.aspx?story=3D18129">Beep Magazine</a></li>
			<li>
				<script language="JavaScript" src="http://www.mumbobbqsauce.com/audio/audio-player.js"></script>
				<a href="http://vocalo.org/explore/content/17175">Interview with Vocalo.org, Ayana Contreras, 89.5 FM (Part 1)</a><br /><object type="application/x-shockwave-flash" data="http://www.mumbobbqsauce.com/audio/player.swf" id="audioplayer1" height="24" width="290">
					<param name="movie" value="http://www.mumbobbqsauce.com/audio/player.swf">
					<param name="FlashVars" value="playerID=1&amp;soundFile=http://www.mumbobbqsauce.com/audio/MumboInterview1.mp3">
					<param name="quality" value="high">
					<param name="menu" value="false">
					<param name="wmode" value="transparent">
				</object> 
			</li>
			<li>
				<a href="http://vocalo.org/explore/content/28009">Interview with Vocalo.org, Ayana Contreras, 89.5 FM (Part 2)</a><br /><object type="application/x-shockwave-flash" data="http://www.mumbobbqsauce.com/audio/player.swf" id="audioplayer2" height="24" width="290">
					<param name="movie" value="http://www.mumbobbqsauce.com/audio/player.swf">
					<param name="FlashVars" value="playerID=2&amp;soundFile=http://www.mumbobbqsauce.com/audio/MumboInterview2.mp3">
					<param name="quality" value="high">
					<param name="menu" value="false">
					<param name="wmode" value="transparent">
				</object> 
			</li>
		</ul> 
	</div>

<?php

$template->footer();

?>