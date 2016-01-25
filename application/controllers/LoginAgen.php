<?php 
defined("BASEPATH") OR exit ("No Direct Script Access Allowed");

class LoginAgen extends CI_Controller{
	public function __construct(){
		parent::__construct();

		$this->load->library('ion_auth');
	}

	public function index(){
		$this->load->view('loginArea/loginadmin');
	}

}