<?php
if (!defined('BASEPATH'))     exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('Loginmodel');
		$this->load->helper( array('security', 'url') );

    }

    public function index() {

        if( adminAuthentication() ) header( 'Location: '.base_url().'dashboard' );
        else $this->load->view('login_view');         

    }


    public function adminLogin() {

        if ( adminAuthentication() ) {
            header( 'Location: '.base_url().'dashboard' );
        }

        $this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $data['msg'] = "User ID or Password is invalid.";
            $this->load->view('login_view', $data);
        }
        else
         {
             $email = $this->input->post('email'); 
             $password = $this->input->post('password'); 

                if( $this->Loginmodel->login($email,$password) )
                {
                    $this->session->set_userdata( 'adminEmail', $email );
                     header( 'Location: '.base_url().'dashboard' );
                }
                else
                {
                   $data['msg'] = "<div style='color:red'>Invaid Email-id or Password</div>";
                    $this->load->view('login_view', $data); 
                }
        }

    }

    public function logout() {   

        $this->session->sess_destroy();
        header( 'Location:'.base_url().'admin' );

    }

}