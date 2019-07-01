<?php


if( !function_exists( 'adminAuthentication' ) )
{
	function adminAuthentication()
	{
		$CI =& get_instance();
		
		if( $CI->session->userdata( 'adminEmail' ) ) return true;
		else false;
	}

}