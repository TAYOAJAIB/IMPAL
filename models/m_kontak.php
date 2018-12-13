<?php
class M_kontak extends CI_Model{

	public function getAll()
	{
		$data_akun = $this->db->get('kontak');
		return $data_akun->result_array();
	}

	public function tambahKontak($data_akun){
		$this->db->insert('kontak',$data_akun);
	}

	public function delKontak($id_kontak)
	{
		$this->db->where('id_kontak',$id_kontak);
		$this->db->delete('kontak');
	}
}
?>