<?php 
 
class CHome extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		
		$this->load->model('mProfil');
	}

	function index(){
		$data_akun = array();
		$data_akun['title'] = 'HOME';
		$data_akun['list'] = $this->mProfil->getAll();
		$this->load->view('homel',$data_akun);
		
	}

	function aboutUS(){
		$this->load->view('aboutUsl');
	}

	function vidio(){
		$this->load->view('video');
	}

	function contactUs(){
		$this->load->view('contactUsl');
	}

	function profile($username){
		$data_akun = array();
		$data_akun['data'] = $this->m_alamat->dataAlamat();
		$data_akun['user'] = $this->mProfil->getData($username);
		$data_akun['title'] = 'update';
		$data_akun['list'] = $this->mProfil->getAll();
		$this->load->view('profil',$data_akun);
	}

	function editt(){
		$data_akun = array();
		$data_akun['list'] = $this->mProfil->getAll();
		$this->load->view('edit_data',$data_akun);
	}

	function keranjangl(){
		$produks = array();
		$produks['list'] = $this->m_keranjang->dataKeranjang(); 
		$this->load->view('keranjang',$produks);
	}

	function ashtray(){
		$produks = array();
		$produks['list'] = $this->m_produk->dataProduk(); 
		$this->load->view('ashtrayl',$produks);
	}

	function clock(){
		$produks = array();
		$produks['list'] = $this->m_produk->dataProduk(); 
		$this->load->view('clockl',$produks);
	}

	function bag(){
		$produks = array();
		$produks['list'] = $this->m_produk->dataProduk(); 
		$this->load->view('bagl',$produks);
	}

	function lamp(){
		$produks = array();
		$produks['list'] = $this->m_produk->dataProduk(); 
		$this->load->view('lampl',$produks);
	}

}
?>