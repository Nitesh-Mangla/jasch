<?php

class HomeNewsEvent extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('HomeNewsEventModel', 'news');
	}

	public function index()
	{
		if( !adminAuthentication() ) header( 'Location: '.base_url().'admin' );
		$data['data'] = $this->getData();
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('newsevent/newseventlist', $data);
		$this->load->view('include/footer');
	}

	public function getData()
	{
		return $this->news->fetchData();
	}

	public function updateNewsEvent()
	{
		if( $this->input->post( 'submit' ) )
		{
			$data = $this->input->post();
			if( $this->news->updateNewsEventData( $data ) )
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
		$data['data'] = $this->news->fetchData( $id );
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('newsevent/edit', $data);
		$this->load->view('include/footer');
	}
}