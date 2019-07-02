<?php

class ManufatureMachine extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ManufatureMachineModel', 'machine');		
	}

	public function index()
	{
		if( !adminAuthentication() ) header( 'Location: '.base_url().'admin' );
		
		$data['data'] = $this->getData();
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('machine/machinelist', $data);
		$this->load->view('include/footer');
	}

	public function getData()
	{
		return $this->machine->fetchData();
	}

	public function addManufatureMachine()
	{
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('machine/add');
		$this->load->view('include/footer');
	}
	
	public function insertManufatureMachine()
	{
		if( $this->input->post('submit') )
		{
				$data = $this->input->post();

				if( $this->machine->insertManufatureMachineData( $data ) )
				{
					$this->session->set_flashdata( 'msg', 'Data has been successfully inserted' );
				}
				else
				{
					$this->session->set_flashdata( 'error', 'Data is not inserted' );	
				}
		}
		else
		{
				$this->sesson->set_flashdata( 'error', 'Something went wrong' );
		}
			header( 'Location:'.base_url().'about/ManufatureMachine' );
	}

	public function updateManufatureMachine()
	{
		if( $this->input->post('submit') )
		{
				$data = $this->input->post();
				
				if( $this->machine->updateManufatureMachineData	( $data ) )
				{
					$this->session->set_flashdata( 'msg', 'Data has been successfully updated' );					
				}
				else
				{
					$this->session->set_flashdata( 'error', 'Data is not updated' );		
				}
		}
			
			if( $this->input->post('id') ) $id = $this->input->post('id');
			else $id = $this->input->get('id'); 	
			$data['data'] = $this->machine->fetchData($id);
			$this->load->view('include/header');
			$this->load->view('include/breadcrum');
			$this->load->view('machine/edit', $data);
			$this->load->view('include/footer');
	}

	public function delete()
	{
		$id = $this->input->get('id');
		if( !empty($id) )
		{
			if($this->machine->deleteManufatureMachine( $id ))
			{
				$this->session->set_flashdata( 'msg', 'Data has been successfully deleted' );
			}
			else
			{
				$this->session->set_flashdata( 'error', 'Data is not updated' );
			}
		}
		else
		{
			$this->session->set_flashdata( 'error', 'Something went wrong' );
		}

		header( 'Location:'.base_url().'about/ManufatureMachine' );
	}
}