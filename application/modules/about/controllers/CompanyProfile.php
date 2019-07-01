<?php
class CompanyProfile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CompanyProfileModel', 'slider');		
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
		return $this->slider->fetchData();
	}

}