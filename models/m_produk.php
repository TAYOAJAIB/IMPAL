<?php
class M_produk extends CI_Model{

	public function dataProduk(){
		$this->db->order_by('nama','asc');
		$data_akun = $this->db->get('produk');
		return $data_akun->result_array();
	}

	public function addProduk($data_barang){
		$this->db->insert('produk',$data_barang);
	}

	public function delProduk($id_produk)
	{
		$this->db->where('id_produk',$id_produk);
		$this->db->delete('produk');
	}

}
?>