<?php
class MContact extends CI_Model{
public function add_contact($data)
	{
		$this->db->insert('pesan',$data);
	}
}
?>