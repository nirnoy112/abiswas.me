<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {

	public function index() {

		$data['pageTitle'] = 'Resume - Amit Biswas';

		$data['_view'] = 'page/resume';

		$this->load->view('layout/main', $data);

	}
	
}
