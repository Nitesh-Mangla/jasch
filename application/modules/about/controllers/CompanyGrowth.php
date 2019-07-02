<?php

class CompanyGrowth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('CompanyGrowthModel', 'growth');		
	}

	public function index()
	{
		if( !adminAuthentication() ) header( 'Location: '.base_url().'admin' );
		
		$data['data'] = $this->getData();
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('companygrowth/companygrowthlist', $data);
		$this->load->view('include/footer');
	}

	public function getData()
	{
		return $this->growth->fetchData();
	}

	public function addCompanyGrowth()
	{
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('companygrowth/add');
		$this->load->view('include/footer');
	}
	
	public function insertCompanyGrowth()
	{
		if( $this->input->post('submit') )
		{
				$data = $this->input->post();

				if( uploadImages('files', 'about_us/growth') && $this->growth->insertCompanyGrowthData( $data, $_FILES['files']['name'] ) )
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
			header( 'Location:'.base_url().'about/CompanyGrowth' );
	}

	public function updateCompanyGrowth()
	{
		if( $this->input->post('submit') )
		{
				$data = $this->input->post();
				uploadImages('files', 'about_us/growth');
				if( $this->growth->updateCompanyGrowthData( $data, $_FILES['files']['name'] ) )
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
			$data['data'] = $this->growth->fetchData($id);
			$this->load->view('include/header');
			$this->load->view('include/breadcrum');
			$this->load->view('companygrowth/edit', $data);
			$this->load->view('include/footer');
	}

	public function delete()
	{
		$id = $this->input->get('id');
		if( !empty($id) )
		{
			if($this->growth->deleteCompanyGrowth( $id ))
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

		header( 'Location:'.base_url().'about/CompanyGrowth' );
	}
}