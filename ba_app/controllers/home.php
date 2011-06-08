<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['title'] = 'CIHTML5';
		
		$this->load->view('home_v', $data);
		
		// Language
		$this->lang->load($this->config->item('language'));
	}
}