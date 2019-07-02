<?php
class AboutBody extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AboutBodyModel', 'profile');		
	}

	public function index()
	{
		if( !adminAuthentication() ) header( 'Location: '.base_url().'admin' );
		
		$data['data'] = $this->getData();
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('aboutbody', $data);
		$this->load->view('include/footer');
	}

	public function getData()
	{
		return $this->profile->fetchData();
	}

	public function updateProfile()
	{
		if( $this->input->post( 'submit' ) )
		{
			$data = $this->input->post();

			if( $this->profile->updateData( $data ) )
			{
				$this->session->set_flashdata( 'msg', 'Data has been updated' );
			}  
			else
			{
				$this->session->set_flashdata( 'error', 'Data is not updated' );
			}
		}

		$data['data'] = $this->getData();
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('aboutbody', $data);
		$this->load->view('include/footer');
	}

}