<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function index() {
		$data['title'] = 'Blog - HospedajeWeb.com';
		$data['section'] = 'blog';
		$this->load->view('general/header_view',$data);
		$this->load->view('front/affordable_view');
		$this->load->view('front/prefer_view');
		$this->load->view('general/footer_view');	
	}
}