<?php 
 
class CKontak extends CI_Controller{
	public function addKontak(){
		$data = array(
			'username'=>$this->session->userdata('username'),
			'email'=>$this->input->post('email'),
			'pesan'=>$this->input->post('message')
		);
		$this->m_kontak->tambahKontak($data);
		$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Pesan Berhasil Dikirim <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('cHome/contactUs');
	}
	
}
