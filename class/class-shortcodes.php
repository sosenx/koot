<?php 
namespace koot_namespace;


class shortcodes {
	/*
	* This function appedns application to page from shortcode
	*/
	public static function koot_namespace( $atts, $content = "" ) {
		$defaults = array( 
			'id' => uniqid( '' )
		);
		$main_app_file = GAAD_PLUGIN_TEMPLATE_APP_TEMPLATES_DIR . '/router.html';

		$output = array();
		if ( is_file( $main_app_file ) ) {
			$output[] = file_get_contents( $main_app_file );
		}
		

		$r = implode( "\n", $output );
		return $r;
	}

	public static function no_main_shortcode_error(){		
		$output = array();
 		$shortcode = basename( constant( 'koot_namespace\GAAD_PLUGIN_TEMPLATE_SHORTCODE' ) );
    
    	$output[] = '<br><br>BRAK FUNKCJI: shortcodes::'.$shortcode . '<br><br>';
		$r = implode( "\n", $output );
		return $r;

	}

}


?>