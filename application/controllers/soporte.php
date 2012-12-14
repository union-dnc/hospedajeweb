<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Soporte extends CI_Controller {

	function index() {
		$data['title'] = 'Soporte - HospedajeWeb.com';
		$data['section'] = 'soporte';
		$this->load->view('general/header_view',$data);
		$this->load->view('general/footer_view');	
	}

}