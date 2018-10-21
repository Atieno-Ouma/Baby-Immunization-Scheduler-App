<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BabyAccount extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->helper('url');
		//
		//$this->load->model('css');
	}

public function index()
	{
		$this->load->view('services',$data);
		$this->load->model("Babyaccountmodel");
		$data["fetch_data"]=$this->Babyaccountmodel->fetch_data();
	}
	function update_data(){
		$name=$this->uri->segment(3);
		$this->load->model('Babyaccountmodel');
		$data["user_data"]=$this->Babyaccountmodel->fetch_single_data($name);
		$data["fetch_data"]=$this->Babyaccountmodel->fetch_data();
		$this->load->view('services',$data);

	}

}

