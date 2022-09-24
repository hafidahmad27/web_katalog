<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('M_master');
	// }

	public function index()
	{
		$this->load->view('templates_backend/header');
		$this->load->view('templates_backend/sidebar');
		$this->load->view('backend/dashboard');
		$this->load->view('templates_backend/footer');
	}
}
