<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CRegis extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('mRegis');
	}
//PUNYA LOGIN
//	function __construct(){
//		parent::__construct();		
//		$this->load->model('mLogin');
//BATAS LOGIN//
 
	function index(){
		$this->load->view('vRegister');
	}
 
	function input(){
		$level='users';
		$data = ([
					'username'=>$this->input->post('username'),
					'email'=>$this->input->post('email'),
					'password'=>$this->input->post('password'),
					'level'=>$level]);
		$this->mRegis->addAkun($data);

		redirect('cRegis');
		// $data_akun = array_merge($data);
		// $this->form_validation->set_rules('username','username','required|is_unique[akun.username]',array('is_unique' => 'USERNAME sudah terdaftar'));
		// $this->form_validation->set_error_delimiters('<span class="text_danger">','</span>');

		// $this->load->library('upload');
		// $config['upload_path']   = './uploads/';
		// $config['allowed_types'] = 'gif|jpg|png|jpeg';
		// $config['max_size']      = '5000000';
		// $config['max_width']     = 10000;
		// $config['max_height']    = 10000;
		// $temp = explode(".", $_FILES["userfile"]["name"]);
		// $nama_file = "gambar_".time().'.'.end($temp);
		// $config['file_name']     = $nama_file;

		// // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
		// $this->upload->initialize($config);
		// if ($_FILES['userfile']['name']) {

		// 	$file_name = "userfile";
		// 	$level = 'users';
	 // 		$foto = $this->upload->data();
		// 	if($this->form_validation->run() && $this->upload->do_upload($file_name)){
		// 		$data = ([
		// 			'username'=>$this->input->post('username'),
		// 			'email'=>$this->input->post('email'),
		// 			'password'=>$this->input->post('password'),
		// 			'level'=>$level,
		// 			'foto'=>$foto['file_name']]);

		// 		$data_akun = array_merge($data);
		// 		if ($this->mRegis->addAkun($data_akun) == false) {
		// 			$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Registrasi Berhasil <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		// 			redirect('cLogin');
		// 		} else{
		// 			$this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert"> Registrasi Gagal bray<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		// 			redirect('cRegis');
		// 		} 

		// 	}else{
		// 		if(!$this->form_validation->run()){
		// 			$this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert">Username Sudah Terdaftar<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		// 		} else {
		// 			$this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert"> Registrasi Gagal : Periksa lagi type dan ukuran file <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		// 		}
		// 		redirect('cRegis');
		// 	}
		// } else {
		// 	$this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert"> Registrasi Gagal cuy<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		// 	redirect('cRegis');
		// }
	} 
//PUNYA LOGIN
 
}


//BATAS LOGIN

?>