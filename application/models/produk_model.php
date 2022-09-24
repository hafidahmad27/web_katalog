<?php

class produk_model extends CI_Model
{
	public function select_data($table)
	{
		return $this->db->get($table);
	}

	public function get_id($id)
	{
		$hasil = $this->db->where('id_produk', $id)->get('tb_produk');

		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function getKategoriById($id_kategori)
	{
		return $this->db->get_where('tb_kategori', array('id_kategori' => $id_kategori))->row();
	}

	public function getProdukById($id_produk)
	{
		return $this->db->get_where('tb_produk', array('id_produk' => $id_produk))->row();
	}

	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
		$this->db->query("ALTER TABLE " . $table . " AUTO_INCREMENT=1;");
	}

	public function joinKategoriToProduk()
	{
		$this->db->select('*');
		$this->db->from('tb_kategori');
		$this->db->join('tb_produk', 'tb_produk.id_kategori = tb_kategori.id_kategori');

		$query = $this->db->get();
		return $query->result();
	}
}
