<?php 
// Get Base Url
if(!function_exists('base_url')){
    function base_url(){
        return get_instance()->config->base_url();
    }
}