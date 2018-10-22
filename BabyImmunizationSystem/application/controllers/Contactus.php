<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->helper('url');
		//
		//$this->load->model('css');
	}
public function index()
	{
		if($this->session->userdata('username')!='')

		{
			$this->load->view('contactus');
			
		
		}
		else{
			redirect(base_url().'Logincontroller');
		}
		
	}
	public function form_validation(){
		//echo 'OK';
		$this->load->library('form_validation');
		$this->form_validation->set_rules("Name","Name", 'required');
		$this->form_validation->set_rules("Email","Email", 'required');
		$this->form_validation->set_rules("Feedback","Feedback", 'required');
		$this->form_validation->set_rules("Star_rating","Star_rating", 'required');
		if($this->form_validation->run()){
			//true
			$this->load->model('Contactusmodel');
			$data=array(
				"Name" =>$this->input->post("Name"),
				"Email" =>$this->input->post("Email"),
				"Feedback" =>$this->input->post("Feedback"),
				"Star_rating" =>$this->input->post("Star_rating"),
		);
			$this->Contactusmodel->insert_data($data);
				redirect(base_url().'Contactus');
		}
		else
		{
			$this->index();
		}

	}
	

}

