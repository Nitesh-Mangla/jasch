<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){	
		$page_data['page_name']  = 'home';
        $page_data['page_title'] = "Home | Jasch";
        $this->load->view('page', $page_data);
	}

    
    public function about(){
        $page_data['page_name']  = 'about';
        $page_data['page_title'] = "About Page | Jasch";
        $this->load->view('page', $page_data);
    }
	
	public function clients(){
        $page_data['page_name']  = 'clients';
        $page_data['page_title'] = "Clients | Jasch";
        $this->load->view('page', $page_data);
    }
    
    public function contact(){
        $page_data['page_name']  = 'contact';
        $page_data['page_title'] = "Contact Us | Jasch";
        $this->load->view('page', $page_data);
    }
    

    public function careers(){
        $page_data['page_name']  = 'careers';
        $page_data['page_title'] = "Careers | Jasch";
        $this->load->view('page', $page_data);
    }
	
	public function notices(){
        $page_data['page_name']  = 'notices';
        $page_data['page_title'] = "Notices | Jasch";
        $this->load->view('page', $page_data);
    }

    public function press_coverage(){
        $page_data['page_name']  = 'press_coverage';
        $page_data['page_title'] = "Press Coverage | Jasch";
        $this->load->view('page', $page_data);
    }

    public function research_development(){
        $page_data['page_name']  = 'research_development';
        $page_data['page_title'] = "Research Development | Jasch";
        $this->load->view('page', $page_data);
    }

    public function apply_now(){
        $page_data['page_name']  = 'apply_now';
        $page_data['page_title'] = "Apply Now | Jasch";
        $this->load->view('page', $page_data);
    }

     public function openings(){
        $page_data['page_name']  = 'openings';
        $page_data['page_title'] = "Openings | Jasch";
        $this->load->view('page', $page_data);
    }
	public function news(){
        $page_data['page_name']  = 'news';
        $page_data['page_title'] = "Update News | Jasch";
        $this->load->view('page', $page_data);
    }
	
	public function product_page(){
        $page_data['page_name']  = 'product_page';
        $page_data['page_title'] = "Products | Jasch";
        $this->load->view('page', $page_data);
    }

    public function product_detail(){
        $page_data['page_name']  = 'product_detail';
        $page_data['page_title'] = "Products Detail | Jasch";
        $this->load->view('page', $page_data);
    }

	
	
    
    

}
