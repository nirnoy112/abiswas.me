<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Recommendation extends CI_Controller {

	public function index() {

		$data['pageTitle'] = 'Recommendation - Amit Biswas';

		$data['_view'] = 'page/recommendation';

		$this->load->view('layout/main', $data);

	}
	
}
