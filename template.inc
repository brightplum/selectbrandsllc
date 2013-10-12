<?php

# template.inc
# Selectbrandsllc.com / Mumbobbqsauce.com
# Fredric Mitchell
# http://fredricjmitchell.com

class Template {

	# data storage
	var $header_xhtml;
	var $footer_xhtml;

   function __construct() {
       $this->header_xhtml = '';
       $this->footer_xhtml = '';
   }

   function set_header( $header_xhtml ) {
       $this->header_xhtml = $header_xhtml;
   }

   function set_footer( $xhtml ) {
       $this->footer_xhtml = $xhtml;
   }

   function header( $title, $css = array(), $nbr) {
		if ( strlen( $title ) > 0 ) {
			$title = $title . ' | ';
		}
      
      $this->header_xhtml = str_replace( '{TITLE}', $title, $this->header_xhtml );
	  $this->header_xhtml = str_replace( '{PAGE}', $nbr, $this->header_xhtml );

       if ( count( $css ) > 0 ) {
			$css_xhtml = '<style type="text/css">' . "\n";
			foreach ( $css as $value ) {
				$css_xhtml .= "@import url( '/css/" . $value . "' );\n";
			}
			
			$css_xhtml .= "</style>\n";
         $this->header_xhtml = str_replace( '{CSS}', $css_xhtml, $this->header_xhtml );
       }
       
       echo $this->header_xhtml;
   }

   function footer() {
       echo $this->footer_xhtml;
   }

   function is_setup() {
       return ! ( $this->header_xhtml == '' || $this->footer_xhtml == '' );
   }

}

?>