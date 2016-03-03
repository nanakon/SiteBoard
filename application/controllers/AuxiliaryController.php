<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuxiliaryController extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
	}

	
	public function process_siteboard_create_form()
	{
		echo $this->input->post('siteboard_name');
	}

}



