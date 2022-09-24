<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

	public function index()
	{
		$this->load->view('templates_frontend/header');
		$this->load->view('frontend/about');
		$this->load->view('templates_frontend/footer');
	}
}
