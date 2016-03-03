<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('MainModel');
	}

	public function handle_ajax() {
		$json = json_decode($this->input->post('ajax_data'));
		
		echo $json[1];
		$userdata = array (
					'full_name' => $json[0],
					'facebook_ID' => $json[1]
					);
		$this->session->set_userdata($userdata);		
	}

}



