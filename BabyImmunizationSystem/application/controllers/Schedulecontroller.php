<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedulecontroller extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->helper('url');
		//
		//$this->load->model('css');
	}
public function index()
	{
		$this->load->view('services');
	}
	public function form_validation(){
		//echo 'OK';
		$this->load->library('form_validation');
		$this->form_validation->set_rules("vaccinename","Vaccine name", 'required');
		$this->form_validation->set_rules("thedate","Date1", 'required');
		$this->form_validation->set_rules("hospital","Hospital", 'required');
		if($this->form_validation->run()){
			//true
			$this->load->model('Schedulemodel');
			$data=array(
				"vaccinename" =>$this->input->post("vaccinename"),
				"thedate" =>$this->input->post("thedate"),
				"hospital" =>$this->input->post("hospital"),
		);
			$this->Schedulemodel->insert_data($data);
				redirect(base_url().'Schedulecontroller');
		}
		else
		{
			$this->index();
		}

	}
	

}

