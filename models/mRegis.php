<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MRegis extends CI_Model{

	public function addAkun($data_akun){
		$this->db->insert('akun',$data_akun);
	}
}

?>