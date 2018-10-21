<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pediatrician extends CI_Controller {

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
		$this->form_validation->set_rules("pediname","Pediatrician name", 'required');
		$this->form_validation->set_rules("hospital","Hospital", 'required');
		$this->form_validation->set_rules("datevisited","Datevisited", 'required');
		if($this->form_validation->run()){
			//true
			$this->load->model('Pedimodel');
			$data=array(
				"pediname" =>$this->input->post("pediname"),
				"hospital" =>$this->input->post("hospital"),
				"datevisited" =>$this->input->post("datevisited"),
		);
			$this->Pedimodel->insert_data($data);
				redirect(base_url().'Pediatrician');
		}
		else
		{
			$this->index();
		}

	}
	

}

