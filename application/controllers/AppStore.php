<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class AppStore extends CI_Controller {

	public function index() {

		$data['pageTitle'] = 'App Store - Amit Biswas';

		$data['_view'] = 'page/app-store';

		$this->load->view('layout/main', $data);

	}
	
}
