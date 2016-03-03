<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('MainModel');
		$this->load->helper('url');
	}

	
	public function index() 
	{	
		$user_data['ip'] = $this->input->ip_address();
		$user_data['ip_recognized'] = $this->MainModel->ip_recognized($user_data['ip']);

		if ($user_data['ip_recognized'] == True) {
			$this->siteboard_exists($user_data);
		}
		else {
			$this->siteboard_doesnt_exist($user_data);
		}

	}

	private function siteboard_exists($user_data) 
	{
		$siteboard_content = 
		$this->load->view('/templates/header.php');
		$this->load->view('/pages/siteboard.php' ,$user_data);
		$this->load->view('/templates/footer.php');
		
	}

	private function siteboard_doesnt_exist($user_data)
	{
		$this->load->view('/templates/header.php');
		$this->load->view('/pages/siteboard_doesnt_exist.php' ,$user_data);
		$this->load->view('/templates/footer.php');
	}

	public function display_page($page) 
	{
		$this->load->view('/templates/header.php');
		$this->load->view('/pages/'.$page.'.php');
		$this->load->view('/templates/footer.php');
	}

}



