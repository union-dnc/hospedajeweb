<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hospedaje extends CI_Controller {

	function index() {
		$data['title'] = 'HospedajeWeb.com';
		$data['section'] = 'inicio';
		$this->load->view('general/header_view',$data);
		$this->load->view('front/index_view');
		$this->load->view('general/footer_view');
	}

}