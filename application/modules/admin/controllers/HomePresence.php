<?php
class HomePresence extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('HomePresenceModel', 'presence');
	}

	public function index()
	{
		if( !adminAuthentication() ) header( 'Location: '.base_url().'admin' );
		$data['data'] = $this->getData();
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('ourpresence/ourpresencelist', $data);
		$this->load->view('include/footer');
	}

	public function getData()
	{
		return $this->presence->fetchData();
	}

	public function updatePresence()
	{
		if( $this->input->post( 'submit' ) )
		{
			$data = $this->input->post();
			uploadImages( 'files', 'home' );
			if( $this->presence->updatePresenceData( $data, $_FILES['files']['name'] ) )
			{
				$this->session->set_flashdata( 'msg', 'Data has been successfully updated' );
			}
			else
			{
				$this->session->set_flashdata( 'error', 'Data is not updated' );
			}
		}
		if( $this->input->get('id') ) $id = $this->input->get('id');
		else $id = $this->input->post('id');
		$data['data'] = $this->presence->fetchData( $id );
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('ourpresence/edit', $data);
		$this->load->view('include/footer');
	}
}