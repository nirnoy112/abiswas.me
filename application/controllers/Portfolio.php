<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function index() {

		echo '';

	}

	public function item1() {

		$data['pageTitle'] = 'Portfolio - Amit Biswas';

		$data['_view'] = 'portfolio/item1';

		$this->load->view('layout/main', $data);

	}

	public function item2() {

		$data['pageTitle'] = 'Portfolio - Amit Biswas';

		$data['_view'] = 'portfolio/item2';

		$this->load->view('layout/main', $data);

	}

	public function item3() {

		$data['pageTitle'] = 'Portfolio - Amit Biswas';

		$data['_view'] = 'portfolio/item3';

		$this->load->view('layout/main', $data);

	}

	public function item4() {

		$data['pageTitle'] = 'Portfolio - Amit Biswas';

		$data['_view'] = 'portfolio/item4';

		$this->load->view('layout/main', $data);

	}

	public function item5() {

		$data['pageTitle'] = 'Portfolio - Amit Biswas';

		$data['_view'] = 'portfolio/item5';

		$this->load->view('layout/main', $data);

	}

	public function item6() {

		$data['pageTitle'] = 'Portfolio - Amit Biswas';

		$data['_view'] = 'portfolio/item6';

		$this->load->view('layout/main', $data);

	}
	
}
