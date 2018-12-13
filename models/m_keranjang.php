<?php
class M_keranjang extends CI_Model{

	public function tambahKeranjang($data){
		$this->db->insert('keranjang',$data);
	}

	public function dataKeranjang(){
		$data_akun = $this->db->get('keranjang');
		return $data_akun->result_array();
	}

	public function delKeranjang($id_keranjang)
	{
		$this->db->where('id_keranjang',$id_keranjang);
		$this->db->delete('keranjang');
	}
	
	public function delAllKeranjang($username)
	{
		$this->db->where('username',$username);
		$this->db->delete('keranjang');
	}

}
?>