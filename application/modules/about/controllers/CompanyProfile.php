<?php

class CompanyProfile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('CompanyProfileModel', 'profile');
	}

	public function index()
	{
		if( !adminAuthentication() ) header( 'Location: '.base_url().'admin' );
		
		$data['data'] = $this->getData();
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('companyprofile', $data);
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
			uploadImages( 'files', 'about_us' );
			if( $this->profile->updateProfileData( $data, $_FILES['files']['name'] ) )
			{
				$this->session->set_flashdata( 'msg', 'Data has been successfully updated' );
			}
			else
			{
				$this->session->set_flashdata( 'error', 'Data is not updated' );
			}
		}

		header( 'Location:'.base_url().'about/CompanyProfile' );
	}
}