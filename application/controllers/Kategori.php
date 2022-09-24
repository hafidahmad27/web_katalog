<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
	}

	public function index()
	{
		$data['kategori'] = $this->produk_model->select_data('tb_kategori')->result();

		$this->load->view('templates_backend/header');
		$this->load->view('templates_backend/sidebar');
		$this->load->view('backend/kategori', $data);
		$this->load->view('templates_backend/footer');
	}

	public function tambah_data()
	{
		$nama_kategori = $this->input->post('nama_kategori');

		$data = array(
			'nama_kategori' => $nama_kategori
		);

		$this->produk_model->insert_data($data, 'tb_kategori');
		redirect('kategori/index');
	}

	public function edit($id_kategori)
	{
		$where = array('id_kategori' => $id_kategori);
		$data['kategori'] = $this->produk_model->edit_data($where, 'tb_kategori')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('kategori/index', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id_kategori = $this->input->post('id_kategori');
		$nama_kategori = $this->input->post('nama_kategori');

		$data = array(
			'nama_kategori' => $nama_kategori
		);

		$where = array(
			'id_kategori' => $id_kategori
		);

		$this->produk_model->update_data($where, $data, 'tb_produk');
		redirect('kategori/index');
	}

	public function getUbah()
	{
		echo json_encode($this->produk_model->getKategoriById($_POST['id']));
	}

	public function hapus_data($id_kategori)
	{
		$where = array('id_kategori' => $id_kategori);
		$this->produk_model->delete_data($where, 'tb_kategori');
		redirect('kategori/index');
	}
}
