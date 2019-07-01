<?php

if( !function_exists( 'uploadImages' ) )
{
    
    function uploadImages( $image, $path  )
    {
        $CI = &get_instance();
        $config = array();
				$config['upload_path'] = 'assets/img/'.$path; 
				$config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|mp4|3gp';
// 		$config['max_size'] = '5000';
// 		$config['max_height'] = '1500'; 
// 		$config['max_width'] = '3654'; 
		$config['overwrite'] = FALSE; 
		
		$CI->upload->initialize( $config );

		if( $CI->upload->do_upload( $image ) )
		{
			return true;
		}
		else
		{
			 $CI->upload->display_errors();
		} 
    }
}