<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logoutcontroller extends CI_Controller {

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
	public function logout()
{
    $this->load->driver('cache');
    $this->session->sess_destroy();
    $this->cache->clean();
    ob_clean();
    redirect(base_url().'Logincontroller');       
}
	
}

