<?php 

class CProfil extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('mProfil');
	}
 
	function index(){
		$data_akun = array();
		$data_akun['title'] = 'update';
		$data_akun['list'] = $this->mProfil->getAll();
		$this->load->view('profil',$data_akun);

	}

	function form_edit($username){
		$data_akun = array();
		$data_akun['title'] = 'Edit';
		$data_akun['user'] = $this->mProfil->getData($username);
		$this->load->view('edit_data',$data_akun);
	}
 
	function update_user($username){
				$data = array(
					'nama'=>$this->input->post('nama'),
					'tanggal'=>$this->input->post('tanggal'),
					'bulan'=>$this->input->post('bulan'),
					'tahun'=>$this->input->post('tahun'),
					'hp'=>$this->input->post('hp'),
					'email'=>$this->input->post('email')
				);
				$data_akun = array_merge($data);
				if ($this->mProfil->updatedata($data_akun,$username) == false) {
					$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Profil Berhasil Diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
					redirect('cHome/profile/'.$this->session->userdata('username'));

				}
				redirect('cHome/profile/'.$this->session->userdata('username'));
	}

	function update_foto($username){

		$this->load->library('upload');
		$config['upload_path']   = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']      = 20000;
		$config['max_width']     = 5000;
		$config['max_height']    = 5000;
		$temp = explode(".", $_FILES["userfile"]["name"]);
		$nama_file = "gambar_".time().'.'.end($temp);
		$config['file_name']     = $nama_file;

		$this->upload->initialize($config);
		if ($_FILES['userfile']['name']) {

			$file_name = "userfile";
	 		$foto = $this->upload->data();
			if($this->upload->do_upload($file_name)){
				$data = array(
					'foto'=>$foto['file_name'],
				);
				$data_akun = array_merge($data);
				if ($this->mProfil->updatedata($data_akun,$username) == false) {
					$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Foto Berhasil Diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
					redirect('cHome/profile/'.$this->session->userdata('username'));

				}
				redirect('cHome/profile/'.$this->session->userdata('username'));
			}
			$this->session->set_flashdata('info','<div class="alert alert-danger" role="alert"> Foto Gagal Diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('cHome/profile/'.$this->session->userdata('username'));
		}
		redirect('cHome');
		
	}

	function insertAlamat(){
		$this->form_validation->set_rules('anama', 'anama' , 'required');
		$this->form_validation->set_rules('ahp', 'ahp' , 'required');
		$this->form_validation->set_rules('aalamat', 'aalamat' , 'required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if ($this->form_validation->run() ) 
		{
			$username = $this->session->userdata('username');
			$anama = $this->input->post('anama');
			$ahp = $this->input->post('ahp');
			$aalamat = $this->input->post('aalamat');

			$alamat = (['username'=>$username,
						'anama'=>$anama,
						'ahp'=>$ahp,
						'aalamat'=>$aalamat,
						]);
			$data = array_merge($alamat);
			if($this->m_alamat->tambahAlamat($data) == false ){
			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Alamat Berhasil Ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('cHome/profile/'.$this->session->userdata('username'),'refresh');
			} else {
			 	$this->index();
			}	
		}
		else
		{
			$this->index();
		}
	}

	function editAlmt($id_alamat){
		$dataA = $this->m_alamat->editAlamat($id_alamat);
		$this->load->view('v_editAlamat', ['dataA'=>$dataA]);
	}

	function updateAlmt()
	{
		$this->form_validation->set_rules('anama', 'anama' , 'required');
		$this->form_validation->set_rules('ahp', 'ahp' , 'required');
		$this->form_validation->set_rules('aalamat', 'aalamat' , 'required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if ($this->form_validation->run() ) 
		{
			$username = $this->session->userdata('username');
			$anama = $this->input->post('anama');
			$ahp = $this->input->post('ahp');
			$aalamat = $this->input->post('aalamat');

			$alamat = (['username'=>$username,
						'anama'=>$anama,
						'ahp'=>$ahp,
						'aalamat'=>$aalamat,
						]);
			$data = array_merge($alamat);
			if($this->m_alamat->m_editAlamat($data, $this->input->post('id_alamat')) == false ){
			$this->session->set_flashdata('edit_pesan','<div class="alert alert-success" role="alert"> Alamat Berhasil Diedit <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('cHome/profile/'.$this->session->userdata('username'),'refresh');
			} else {
			 	$this->index();
			}	
		}
	}

	function deleteAlamat($id_alamat)
	{
		if ($this->m_alamat->m_deleteAlamat($id_alamat) == false)
		{
			$this->session->set_flashdata('hapus_pesan','<div class="alert alert-success" role="alert"> Alamat Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}
		redirect('cHome/profile/'.$this->session->userdata('username'),'refresh');
	}
}

?>