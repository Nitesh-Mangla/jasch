<?php
class Dashboard extends CI_Controller

{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if( !adminAuthentication() )
		{
			header( 'Location: admin' );
		}

		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('main_dashboard');
		$this->load->view('include/footer');
	}
	
}



?>