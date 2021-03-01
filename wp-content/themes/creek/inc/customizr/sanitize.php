<?php
	
	//sanitize adsense box adsense codes
	function creek_sanitize_adsense( $input ) {
 		esc_js($input);
    $input = str_replace(array("\r", "\n"), '', $input);
    return $input;
	}

	//sanitize checkbox
	function creek_sanitize_checkbox( $input ) {
		return ( ( isset( $input ) && true == $input ) ? true : false );
	}

  //sanitize text
  function creek_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
  }

  //sanitize select
	function creek_sanitize_select( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
	}

?>