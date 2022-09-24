<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		// date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data['produk'] = $this->produk_model->select_data('tb_produk')->result();
		$this->load->view('templates_frontend/header');
		$this->load->view('coba', $data);
		$this->load->view('templates_frontend/footer');
	}

	public function detail_produk($id)
	{
		$data['detail'] = $this->produk_model->get_id($id);
		$this->load->view('templates_frontend/header');
		$this->load->view('frontend/detail_produk', $data);
		$this->load->view('templates_frontend/footer');
	}

	public function produk()
	{
		$data['produk'] = $this->produk_model->select_data('tb_produk')->result();
		$data['produk'] = $this->produk_model->joinKategoriToProduk();
		$this->load->view('templates_frontend/header');
		$this->load->view('frontend/galery', $data);
		$this->load->view('templates_frontend/footer');
	}
}
