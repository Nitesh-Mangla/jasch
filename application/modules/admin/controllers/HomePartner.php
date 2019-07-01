<?php
class HomePartner extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('HomePartnerModel', 'partner');
	}

	public function index()
	{
		if( !adminAuthentication() ) header( 'Location: '.base_url().'admin' );
		$data['data'] = $this->getData();
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('homepartner', $data);
		$this->load->view('include/footer');
	}

	public function getData()
	{
		return $this->partner->fetchData();
	}

	public function updatePartner()
	{
		if( $this->input->post( 'submit' ) )
		{
			$data = $this->input->post();
			$images = array();
			for( $i = 0; $i < count($_FILES['files']['name']); $i++ )
			{
				$_FILES['file']['name'] = $_FILES['files']['name'][$i];
				$_FILES['file']['type'] = $_FILES['files']['type'][$i];
				$_FILES['file']['size'] = $_FILES['files']['size'][$i];
				$_FILES['file']['error'] = $_FILES['files']['error'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				$images[] = str_replace( ' ', '_',$_FILES['files']['name'][$i] );
				uploadImages('file', 'home/partner');
			}
				if( $this->partner->updatePartnerData( $data, $images ) )
				{
					$this->session->set_flashdata( 'msg', 'Data is updated' );
				}
				else
				{
					$this->session->set_flashdata( 'error', 'Data is not updated' );
				}
			}
				$data['data'] = $this->getData();
				$this->load->view('include/header');
				$this->load->view('include/breadcrum');
				$this->load->view('homepartner', $data);
				$this->load->view('include/footer');
		}

		public function deletepartners()
	{		
			$id = $this->input->get('id');
			$imageID = $this->input->get('imageID');
			$data = $this->partner->fetchData();
			$images = json_decode($data[0]['images']);
			if (($key = array_search($images[$imageID], $images )) !== false) {
	    	unset($images[$imageID]);
			}
		

			foreach( $images as $value)
			{
				$cerft[] = $value; 
			}
			if( $this->partner->updatePartnerAfterDelete( $cerft )) echo "Success" ;
			else echo "failed";
	}
}