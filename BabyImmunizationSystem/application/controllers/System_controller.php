<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class System_controller extends CI_Controller{
	public function __construct()
	{

		parent::__construct();
		$this->load->helper('url');
		//
		//$this->load->model('css');
	}
	public function index()
	{
		echo "This is my index page";
	}
	public function Contactus(){
		$this->load->view('contactus');
		
	}
	public function Service(){
		$this->load->view('services');
		
	}
	public function Aboutus(){
		$this->load->view('aboutus');

		
	}
	public function Home(){
		$this->load->view('home');
		
	}
	public function Login(){
		$this->load->view('form');
		
	}
}