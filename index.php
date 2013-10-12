<?php

# index.php
# Selectbrandsllc.com / Mumbobbqsauce.com
# Fredric Mitchell
# http://fredricjmitchell.com

# Import templating system
require_once( 'template.inc' );
require_once( 'main_template.inc' );

$template->header( '', $css, 0 );

?>

<br />
<br />
<p class="bold lineheight">For nearly 50 years, Mumbo<sup>&reg;</sup> Bar-B-Q Sauce has been the only choice for
rib lovers both near and far. Carefully blended using all natural ingredients
and a time honored recipe, Mumbo<sup>&reg;</sup> Bar-B-Q Sauce brings out the pure
homestyle flavor in everything you grill - ribs, chops, chicken, burgers,
sausages, even fish.</p>
<p class="bold lineheight"> 
Check out our <a href="/fanmail.php" />fan mail</a> and see for yourself why our diehard
fans love the sweet and tangy taste of Mumbo<sup>&reg;</sup> Bar-B-Q Sauce . . .
it's authentic rib house flavor in every mouthful!</p>
</p>
<p class="text-right bold">Order A Case Of <br />Mumbo<sup>&reg;</sup> Sauce Today!<br />
<a href="order.php" class="red bold">CLICK HERE</a></p>

<?php

$template->footer();

?>