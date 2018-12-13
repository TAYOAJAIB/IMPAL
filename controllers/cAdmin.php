<?php 
 
class CAdmin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('mProfil');
	}

	function index(){
		$data_akun = array();
		$data_akun['title'] = 'Admin';
		$data_akun['list'] = $this->mProfil->getAll();
		$this->load->view('Admin/home_admin',$data_akun);
		
	}
	function kontak(){
		$data_akun = array();
		$dataK['data'] = $this->m_kontak->getAll();
		$this->load->view('Admin/v_message',$dataK);
		
	}
	function deleteKontak($id_kontak){
		if ($this->m_kontak->delKontak($id_kontak) == false)
		{
			$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Message Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}
		redirect('cAdmin/kontak','refresh');
	}

	function deleteAkun($username){
		if ($this->mProfil->delAkun($username) == false)
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Akun Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}
		redirect('cAdmin','refresh');
	}

	function formEdit($username){
		$data = $this->mProfil->editAkun($username);
		$this->load->view('Admin/editUsers', ['data'=>$data]);
	}

	function updateAkun()
	{
		$this->form_validation->set_rules('password', 'password' , 'required');
		$this->form_validation->set_rules('email', 'email' , 'required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if ($this->form_validation->run() ) 
		{
			$password = $this->input->post('password');
			$email = $this->input->post('email');

			$akun = (['password'=>$password,
					  'email'=>$email
					]);
			$data = array_merge($akun);
			if($this->mProfil->m_editAkun($data, $this->input->post('username')) == false ){
			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Alamat Berhasil Diedit <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('cAdmin','refresh');
			} else {
			 	$this->index();
			}	
		}
	}

	function lBarang(){
		$produks = array();
		$produks['list'] = $this->m_produk->dataProduk(); 
		$this->load->view('Admin/listBarang',$produks);
	}		

	function addBarang(){
		$this->load->view('Admin/addBarang');
	}	

	function inputBarang(){
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('harga','harga','required');
		$this->form_validation->set_rules('jenis','jenis','required');
		$this->form_validation->set_rules('keterangan','keterangan','required');
		$this->form_validation->set_error_delimiters('<span class="text_danger">','</span>');

		$this->load->library('upload');
		$config['upload_path']   = './produk/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']      = '5000000';
		$config['max_width']     = 10000;
		$config['max_height']    = 10000;
		$temp = explode(".", $_FILES["foto"]["name"]);
		$nama_file = "gambar_".time().'.'.end($temp);
		$config['file_name']     = $nama_file;

		// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
		$this->upload->initialize($config);
		if ($_FILES['foto']['name']) {

			$file_name = "foto";
	 		$foto = $this->upload->data();
			if($this->form_validation->run() && $this->upload->do_upload($file_name)){
				$data = ([
					'nama'=>$this->input->post('nama'),
					'harga'=>$this->input->post('harga'),
					'jenis'=>$this->input->post('jenis'),
					'keterangan'=>$this->input->post('keterangan'),
					'foto'=>$foto['file_name']]);

				$data_barang = array_merge($data);
				if ($this->m_produk->addProduk($data_barang) == false) {
					$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Penambahan Barang Berhasil <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
					redirect('cAdmin/lBarang');
				} else{
					$this->session->set_flashdata('info','<div class="alert alert-danger" role="alert"> Penambahan Barang Gagal<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
					redirect('cAdmin/addBarang');
				} 

			}else{
				$this->session->set_flashdata('info','<div class="alert alert-danger" role="alert"> Penambahan Barang Gagal : Periksa lagi type dan ukuran file <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('cAdmin/addBarang');
			}
		} else {
			$this->session->set_flashdata('info','<div class="alert alert-danger" role="alert"> Penambahan Barang Gagal<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('cAdmin/addBarang');
		}
	} 

	function deleteProduk($id_produk)
	{
		if ($this->m_produk->delProduk($id_produk) == false)
		{
			$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Barang Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}
		redirect('cAdmin/lBarang','refresh');
	}


}
?>