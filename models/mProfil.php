<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MProfil extends CI_Model{

	public function getAll()
	{
		$data_akun = $this->db->get('akun');
		return $data_akun->result_array();
	}

	public function updatedata($data_akun,$username){
		$this->db->where('username',$username);
		$this->db->update('akun',$data_akun);
	}

	public function getData($username){
		$this->db->where('username',$username);
		$user = $this->db->get('akun');
		return $user->row_array();
	}

	public function addAlt($data_akun){
		$this->db->insert('almt',$data_akun);

	}

	public function m_editAkun($data,$username)
	{
		$this->db->where('username',$username);
		$this->db->update('akun', $data);
	}

	public function editAkun($username){
		$this->db->select('*');
		$this->db->from('akun');
		$this->db->where(['username'=>$username]);
		$data = $this->db->get('');
		if ($data->num_rows() > 0) {
			return $data->row();	
		}
	}

	public function delAkun($username)
	{
		$this->db->where('username',$username);
		$this->db->delete('akun');
	}
}

?>