<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
	}

	public function index()
	{
		$data['kategori'] = $this->produk_model->select_data('tb_kategori')->result();
		$data['produk'] = $this->produk_model->joinKategoriToProduk();

		$this->load->view('templates_backend/header');
		$this->load->view('templates_backend/sidebar');
		$this->load->view('backend/produk', $data);
		$this->load->view('templates_backend/footer');
	}

	public function tambah_data()
	{
		$id_produk = $this->input->post('id_produk');
		$id_kategori = $this->input->post('id_kategori');
		$nama_produk = $this->input->post('nama_produk');
		$harga_produk = $this->input->post('harga_produk');
		$foto = $_FILES['foto'];
		if ($foto = '') {
		} else {
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'jpg|png|jpeg';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				echo "Upload Gagal";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		}

		$deskripsi = $this->input->post('deskripsi');
		$lama_pengerjaan = $this->input->post('lama_pengerjaan');

		$data = array(
			'id_produk' => $id_produk,
			'id_kategori' => $id_kategori,
			'nama_produk' => $nama_produk,
			'harga_produk' => $harga_produk,
			'foto' => $foto,
			'deskripsi' => $deskripsi,
			'lama_pengerjaan' => $lama_pengerjaan
		);

		$this->produk_model->insert_data($data, 'tb_produk');
		redirect('produk/index');
	}

	public function edit($id_produk)
	{
		$where = array('id_produk' => $id_produk);
		$data['produk'] = $this->produk_model->edit_data($where, 'tb_produk')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('produk/index', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id_produk = $this->input->post('id_produk');
		$id_kategori = $this->input->post('id_kategori');
		$nama_produk = $this->input->post('nama_produk');
		$harga_produk = $this->input->post('harga_produk');
		$foto = $this->input->post('foto');
		$deskripsi = $this->input->post('deskripsi');
		$lama_pengerjaan = $this->input->post('lama_pengerjaan');

		$data = array(
			'id_produk' => $id_produk,
			'id_kategori' => $id_kategori,
			'nama_produk' => $nama_produk,
			'harga_produk' => $harga_produk,
			'foto' => $foto,
			'deskripsi' => $deskripsi,
			'lama_pengerjaan' => $lama_pengerjaan
		);

		$where = array(
			'id_produk' => $id_produk
		);

		$this->produk_model->update_data($where, $data, 'tb_produk');
		redirect('Produk/index');
	}

	public function getUbah()
	{
		echo json_encode($this->produk_model->getProdukById($_POST['id']));
	}

	public function hapus_data($id_produk)
	{
		$where = array('id_produk' => $id_produk);
		$this->produk_model->delete_data($where, 'tb_produk');
		redirect('produk/index');
	}
}
