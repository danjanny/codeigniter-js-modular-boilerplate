<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Danjan\Testing;

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function name() {
	    $t = new Testing();
	    echo $t->getData();
	}
	
	public function login() {
		$data['data_source'] = ['nama' => 'Ridha Danjanny'];
		// extend to template.php
		$data['content'] = 'login/login';
		$this->load->view('template', $data);
	}
}