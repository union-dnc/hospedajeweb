<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicios extends CI_Controller {

	function index() {
		$data['title'] = 'Servicios - HospedajeWeb.com';
		$data['section'] = 'servicios';
		$this->load->view('general/header_view',$data);
		$this->load->view('general/footer_view');	
	}

}