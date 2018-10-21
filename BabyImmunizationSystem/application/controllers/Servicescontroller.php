<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicescontroller extends CI_Controller {

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
		$this->load->view('services');
			
		
		}
		else{
			redirect(base_url().'Logincontroller');
		}
	}
	public function form_validation(){
		//echo 'OK';
		$this->load->library('form_validation');
		$this->form_validation->set_rules("vaccinename","Vaccine name", 'required');
		$this->form_validation->set_rules("vaccineprice","Price", 'required');
		$this->form_validation->set_rules("datescheduled","Date1", 'required');
		$this->form_validation->set_rules("dateadministered","Date2", 'required');
		$this->form_validation->set_rules("age","Age", 'required');
		$this->form_validation->set_rules("hospital","Hospital", 'required');
		$this->form_validation->set_rules("pediatrician","Pediatrician", 'required');
		if($this->form_validation->run()){
			//true
			$this->load->model('Servicesmodel');
			$data=array(
				"vaccinename" =>$this->input->post("vaccinename"),
				"vaccineprice" =>$this->input->post("vaccineprice"),
				"datescheduled" =>$this->input->post("datescheduled"),
				"dateadministered" =>$this->input->post("dateadministered"),
				"age" =>$this->input->post("age"),
				"hospital" =>$this->input->post("hospital"),
				"pediatrician" =>$this->input->post("pediatrician")
		);
			$this->Servicesmodel->insert_data($data);
				redirect(base_url().'Servicescontroller');
		}
		else
		{
			$this->index();
		}

	}
	

}

