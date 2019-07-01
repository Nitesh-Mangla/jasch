<?php

 ob_start();

if (!defined('BASEPATH'))

    exit('No direct script access allowed');


class Loginmodel extends CI_Model {

    function __construct() {

        parent::__construct();
    }



    public function login($email, $password) {
      
        $this->db->select();
        $this->db->from('admin_profile');
        $this->db->where(array( 'email' => $email, 'password' => MD5($password) ));        
        $this->db->limit(1);
        $result = $this->db->get();        
        $row = $result->result_array();
        
        if( count( $row ) > 0)
         return true;
        else return false;    

    }



    
}

?>



