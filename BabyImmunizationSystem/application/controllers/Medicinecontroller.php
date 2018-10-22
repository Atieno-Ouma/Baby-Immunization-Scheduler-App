<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicinecontroller extends CI_Controller {

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
		$this->form_validation->set_rules("patientname","Patient name", 'required');
		$this->form_validation->set_rules("medicinename","Medicine name", 'required');
		$this->form_validation->set_rules("dose","Dose", 'required');
		$this->form_validation->set_rules("illness","illness", 'required');
		$this->form_validation->set_rules("startdateadministered","Start date", 'required');
		$this->form_validation->set_rules("completiondate","Completion date", 'required');
		$this->form_validation->set_rules("sideeffects","sideeffects", 'required');
		if($this->form_validation->run()){
			//true
		$this->load->model('Medicinemodel');
			$data=array(
				"patientname"=>$this->input->post("patientname"),
				"medicinename" =>$this->input->post("medicinename"),
				"dose" =>$this->input->post("dose"),
				"illness" =>$this->input->post("illness"),
				"startdate" =>$this->input->post("startdate"),
				"completiondate" =>$this->input->post("completiondate"),
				"sideeffects" =>$this->input->post("sideeffects")
		);
		$this->Medicinemodel->insert_data($data);
				redirect(base_url().'Medicinecontroller');
		}
		else
		{
			$this->index();
		}

	}
	

}

