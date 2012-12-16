<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acerca_de extends CI_Controller {

	function index() {
		$data['title'] = 'Acerca De - HospedajeWeb.com';
		$data['section'] = 'acerca de';
		$this->load->view('general/header_view',$data);
		$this->load->view('front/affordable_view');
		$this->load->view('front/about_us_view');
		$this->load->view('front/prefer_view');
		$this->load->view('front/end_about_view');
		$this->load->view('general/footer_view');	
	}

}