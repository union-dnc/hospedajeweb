<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Planes extends CI_Controller {

	function index() {
		$data['title'] = 'Planes - HospedajeWeb.com';
		$data['section'] = 'planes';
		$this->load->view('general/header_view',$data);
		$this->load->view('front/planes_view');
		$this->load->view('general/footer_view');	
	}

}