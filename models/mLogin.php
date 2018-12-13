<?php 
 
class MLogin extends CI_Model{	

	function loginn($username, $password){
		$this->db->select('*');
		$this->db->from('akun');
		$this->db->where(['username'=>$username]);
		$return = $this->db->get();
		if ($return->num_rows() > 0) {
			foreach ($return->result() as $row) {
					$session = array('username'=>$row->username,
									 'nama'=>$row->nama,
									 'password'=>$row->password,
									 'tanggal'=>$row->tanggal,
									 'bulan'=>$row->bulan,
									 'tahun'=>$row->tahun,
									 'level'=>$row->level,
									 'hp'=>$row->hp,
									 'email'=>$row->email);
					$this->session->set_userdata($session);
				
			}
		}
			
	}

	function editt($username, $password){
		$this->db->select('*');
		$this->db->from('akun');
		$this->db->where(['username'=>$username]);
		$return = $this->db->get();
		if ($return->num_rows() > 0) {
			foreach ($return->result() as $row) {
				$dataUsers = $this->db->get_where('akun', ['username'=>$username]);
				foreach ($dataUsers->result() as $data) {
					$session = array(
									 'nama'=>$data->nama,
									 'tanggal'=>$data->tanggal,
									 'bulan'=>$data->bulan,
									 'tahun'=>$data->tahun,
									 'hp'=>$data->hp,
									 'email'=>$data->email);
					$this->session->set_userdata($session);
				}
			}
			redirect('cHome/profile');
		}
	}

}
?>