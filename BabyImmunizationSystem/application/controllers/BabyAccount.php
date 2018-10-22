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
			if($this->session->userdata('username')!='')

		{
	$this->load->view('babyaccount');
			
		
		}
		else{
			redirect(base_url().'Logincontroller');
		}
		
		//$this->load->model("Babyaccountmodel");
		//$data["fetch_data"]=$this->Babyaccountmodel->fetch_data();
	}

	/*function update_data(){
		$name=$this->uri->segment(3);
		$this->load->model('Babyaccountmodel');
		$data["user_data"]=$this->Babyaccountmodel->fetch_single_data($name);
		$data["fetch_data"]=$this->Babyaccountmodel->fetch_data();
		$this->load->view('services',$data);

	}*/
	public function Vaccdisplay(){
		if($this->session->userdata('username')!='')

		{
		$this->load->model("Babyaccountmodel");
			$data["fetch_data3"]=$this->Babyaccountmodel->fetch_data3();
			$this->load->view('displayvacc',$data);
			
		
		}
		else{
			redirect(base_url().'Logincontroller');
		}
			
	}
	public function Schedisplay(){
			if($this->session->userdata('username')!='')

		{
		$this->load->model("Babyaccountmodel");
			$data["fetch_data4"]=$this->Babyaccountmodel->fetch_data4();
			$this->load->view('displayshed',$data);
			
		
		}
		else{
			redirect(base_url().'Logincontroller');
		}
		
	}
	public function Pedidisplay(){
			if($this->session->userdata('username')!='')

		{
	$this->load->model("Babyaccountmodel");
			$data["fetch_data"]=$this->Babyaccountmodel->fetch_data();
			$this->load->view('displaypedi',$data);
		
		}
		else{
			redirect(base_url().'Logincontroller');
		}
			
	}
	public function growth(){
			if($this->session->userdata('username')!='')

		{
				$this->load->model("Babyaccountmodel");
			$data["fetch_data2"]=$this->Babyaccountmodel->fetch_data2();
			$this->load->view('growthrecords',$data);
			
		
		}
		else{
			redirect(base_url().'Logincontroller');
		}
	
	}
	public function medicine(){
			if($this->session->userdata('username')!='')

		{
	$this->load->model("Babyaccountmodel");
			$data["fetch_data5"]=$this->Babyaccountmodel->fetch_data5();
			$this->load->view('medicine',$data);
			
		
		}
		else{
			redirect(base_url().'Logincontroller');
		}
			
	}

}

