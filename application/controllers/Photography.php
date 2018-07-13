<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Photography extends CI_Controller {

	public function index() {

		$data['pageTitle'] = 'Photography - Amit Biswas';

		$data['_view'] = 'page/photography';

		$this->load->view('layout/main', $data);

	}
	
}
