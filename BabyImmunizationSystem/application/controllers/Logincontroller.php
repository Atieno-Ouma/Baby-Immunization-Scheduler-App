<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logincontroller extends CI_Controller {
	public function __construct()
	{

		parent::__construct();
		$this->load->helper('url');
		//
		//$this->load->model('css');
	}
	public function index()
	{
		$this->load->view('login');
	}
	function login()
	{
		//http://localhost/BabyImmunization/Logincontroller/login
		$data['title']='Codeigniter Simple Login Form With Sessions';
		$this->load->view("login",$data);
	}
	function login_validation(){
		$this->load-> library('form_validation');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){
//true
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$this->load->model('Loginmodel');
			if($this->Loginmodel->can_login($username,$password)){
				$session_data=array(
					'username'=> $username
				);
				$this->session->set_userdata($session_data);
				//redirect('index.php/Logincontroller/enter');
				redirect(base_url().'Logincontroller/enter');
			}
			else{
				$this->session->set_flashdata('error','invalid username or password');
				//redirect('index.php/Logincontroller');
				redirect(base_url().'Logincontroller');
			}

		}
		else{
			//false
			$this->session->set_flashdata('error','fill in all fields');
			//redirect('index.php/Logincontroller');
				redirect(base_url().'Logincontroller');
		}
	}

	function enter(){
		if($this->session->userdata('username')!='')

		{
			//redirect('index.php/Homecontroller');
			redirect(base_url().'Homecontroller');
		
		}
		else{
			//redirect('index.php/Logincontroller/login');
			redirect(base_url(). 'Logincontroller/login');
		}
	}
	function logout(){
		$this->session->unset_userdata('username');
		//redirect('index.php/Logincontroller/login');
		redirect(base_url().'Logincontroller/login');
	}
	 
}

