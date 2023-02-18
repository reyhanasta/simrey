<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorPage extends CI_Controller {
 
	public function index()
	{
		
		
        $this->output->set_status_header('404'); 
		$this->load->view('errors/index');
		$this->load->view('templates/footer');
	}

  
}