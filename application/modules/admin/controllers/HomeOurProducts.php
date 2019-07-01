<?php

class HomeOurProducts extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('HomeOurProductsModel', 'our');
	}

	public function index()
	{
		if( !adminAuthentication() ) header( 'Location: '.base_url().'admin' );
	
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('homeourproduct');
		$this->load->view('include/footer');
	}

	public function updateProduct()
	{
		if( $this->input->post('submit') )
		{
			$data = $this->input->post();
			uploadImages( 'files', 'home/product' );
			if( $this->our->updateProductData( $data, $_FILES['files']['name'] ) )
			{
				$this->session->set_flashdata( 'msg', 'Data is successfully updated' );
			}
			else
			{
				$this->session->set_flashdata( 'error', 'Data is not updated' );
			}
		}

		header( 'Location:'.base_url().'admin/HomeOurProducts' ); 
	}
	
}