<?php
class M_alamat extends CI_Model{

	public function dataAlamat(){
		$this->db->select('*');
		$this->db->from('almt');
		$data = $this->db->get('');
		return $data;
	}

	public function tambahAlamat($data)
		{
			$this->db->insert('almt',$data);
		}

	public function editAlamat($id_alamat){
		$this->db->select('*');
		$this->db->from('almt');
		$this->db->where(['id_alamat'=>$id_alamat]);
		$data = $this->db->get('');
		if ($data->num_rows() > 0) {
			return $data->row();	
		}
	}

	public function m_editAlamat($data,$id_alamat)
	{
		$this->db->where('id_alamat',$id_alamat);
		$this->db->update('almt', $data);
	}

	public function m_deleteAlamat($id_alamat)
	{
		$this->db->where('id_alamat',$id_alamat);
		$this->db->delete('almt');
	}
}
?>