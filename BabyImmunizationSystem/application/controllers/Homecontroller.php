<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homecontroller extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->helper('url');
		//
		//$this->load->model('css');
	}

public function index()
	{
		$this->load->view('home');
	}
	function services(){
		$this->load->view('services');
	}

}

