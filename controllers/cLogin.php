<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');
 
class CLogin extends CI_Controller{
 

 
	function index(){
		$this->load->view('login');
	}
 
	function aksi_login(){
		  $this->db->where('username',$this->input->post('username'));
		  $this->db->where('password',$this->input->post('password'));
		  $u = $this->db->get('akun');
		  if($u->num_rows()==1)
		  {
		  	$this->form_validation->set_rules('username', 'Username' , 'required');
			$this->form_validation->set_rules('password', 'password' , 'required');
			$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
			if ($this->form_validation->run() ) 
			{
				$username = $this->input->post('username');//sesuaikan nama fiednya denagn inputan ok
				$password = $this->input->post('password');
				
				$cek_login = $this->mLogin->loginn($username,$password);

			}
		   $this->session->set_flashdata('login','<div class="alert alert-success" role="alert"> Selamat Datang '.$username.'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		   if ($username == 'admin') {
		   		redirect('cAdmin');
		   } else {
		   		redirect('cHome');
		   }
		   
		 }
		  else
		  {
		  	$this->session->set_flashdata('login','<div class="alert alert-danger" role="alert"> Login Gagal <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		  	 redirect('cLogin');
		  }
	}

	public function user_edit()
	{
		$this->form_validation->set_rules('username', 'Username' , 'required');
		$this->form_validation->set_rules('password', 'password' , 'required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if ($this->form_validation->run() ) 
		{
			$username = $this->input->post('username');//sesuaikan nama fiednya denagn inputan ok
			$password = $this->input->post('password');
			
			$this->mLogin->editt($username,$password);
			
		}
		 else
		{
			$this->index();
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect('cLogin');
	}
}