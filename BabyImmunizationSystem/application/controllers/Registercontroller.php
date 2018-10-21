<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registercontroller extends CI_Controller {

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
	public function form_validation(){
		//echo 'OK';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('babyname',"Babyname",'required');
			$this->form_validation->set_rules('dob',"Dob",'required');
			$this->form_validation->set_rules('gender',"Gender",'required');
			$this->form_validation->set_rules('email',"Email",'required');
			$this->form_validation->set_rules('phone',"Phone number",'required');
			$this->form_validation->set_rules('username',"Username",'required');
			$this->form_validation->set_rules('password',"Password2",'required');
			$this->form_validation->set_rules('password2',"Password2",'required|matches[password]');
		if($this->form_validation->run()){
			//true
		$this->load->model('Registermodel');
			$data=array(
				'babyname'=>$_POST['babyname'],
				'dob'=>$_POST['dob'],
				'gender'=>$_POST['gender'],
				'email'=>$_POST['email'],
				'phone'=>$_POST['phone'],
				'username'=>$_POST['username'],
				'password'=>$_POST['password']
		);
			$this->Registermodel->insert_data($data);
				redirect(base_url().'Homecontroller');
		}
		else
		{
			$this->index();
		}

	}
	

}

