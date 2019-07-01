<?php

// Research and develoment
class HomeRSD extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('HomeRSDModel', 'RSD');
	}

	public function index()
	{
		if( !adminAuthentication() ) header( 'Location: '.base_url().'admin' );
		$data['data'] = $this->getData();
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('research', $data);
		$this->load->view('include/footer');
	}

	public function getData()
	{
		return $this->RSD->fetchData();
	}

	public function updateResearch()
	{
		if( $this->input->post( 'submit' ) )
		{
			$data = $this->input->post();
			if( $this->RSD->updateData( $data ) )
			{
				$this->session->set_flashdata( 'msg', 'Data is successfully updated' );
			}
			else
			{
				$this->session->set_flashdata( 'error', 'Data is not updated' );
			}
		}
			$data['data'] = $this->getData();
			$this->load->view('include/header');
			$this->load->view('include/breadcrum');
			$this->load->view('research', $data);
			$this->load->view('include/footer');
	}
}