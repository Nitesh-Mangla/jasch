<?php

class Slider extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('SliderModel', 'slider');		
	}

	public function index()
	{
		if( !adminAuthentication() ) header( 'Location: '.base_url().'admin' );
		
		$data['data'] = $this->getData();
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('slider/sliderlist', $data);
		$this->load->view('include/footer');
	}

	public function getData()
	{
		return $this->slider->fetchData();
	}

	public function addSlider()
	{
		$this->load->view('include/header');
		$this->load->view('include/breadcrum');
		$this->load->view('slider/add');
		$this->load->view('include/footer');
	}
	
	public function insertSlider()
	{
		if( $this->input->post('submit') )
		{
				$data = $this->input->post();

				if( uploadImages('files', 'about_us/slider') && $this->slider->insertSliderData( $data, $_FILES['files']['name'] ) )
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
			header( 'Location:'.base_url().'about/Slider' );
	}

	public function updateSlider()
	{
		if( $this->input->post('submit') )
		{
				$data = $this->input->post();
				uploadImages('files', 'about_us/slider');
				if( $this->slider->updateSliderData( $data, $_FILES['files']['name'] ) )
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
			$data['data'] = $this->slider->fetchData($id);
			$this->load->view('include/header');
			$this->load->view('include/breadcrum');
			$this->load->view('slider/edit', $data);
			$this->load->view('include/footer');
	}

	public function delete()
	{
		$id = $this->input->get('id');
		if( !empty($id) )
		{
			if($this->slider->deleteSlider( $id ))
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

		header( 'Location:'.base_url().'about/slider' );
	}
}