<?php 
 
class CKeranjang extends CI_Controller{

	public function addKeranjang(){
		$data = array(
			'username'=>$this->session->userdata('username'),
			'nama'=>$this->input->post('namaB'),
			'harga'=>$this->input->post('hargaB'),
			'jumlah'=>$this->input->post('jumlah'),
			'jenis'=>$this->input->post('jenisB')
		);
		$this->m_keranjang->tambahKeranjang($data);
		$this->session->set_flashdata('pesan_belanja','<div class="alert alert-success" role="alert"> Pesanan Telah Dimasukkan Ke dalam Keranjang Belanja <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		if ($this->input->post('jenisB') == 'tas') {
			redirect('cHome/bag');
		} elseif ($this->input->post('jenisB') == 'asbak') {
			redirect('cHome/ashtray');
		} elseif ($this->input->post('jenisB') == 'lampu') {
			redirect('cHome/lamp');
		} else {
			redirect('cHome/clock');
		}
		
	}

	function Home(){
		$this->load->view('homel');

	}

	function keranjangA(){
		$produks = array();
		$produks['list'] = $this->m_produk->produkA()->result_array(); 

		$this->load->view('keranjang',$produks);

	}

	function deleteKeranjang($id_keranjang)
	{
		if ($this->m_keranjang->delKeranjang($id_keranjang) == false)
		{
			$this->session->set_flashdata('hapus_pesan','<div class="alert alert-success" role="alert"> Barang Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}
		redirect('cHome/keranjangl','refresh');
	}
	function deleteAllKeranjang($username)
	{
		if ($this->m_keranjang->delAllKeranjang($username) == false)
		{
			$this->session->set_flashdata('hapus_pesan','<div class="alert alert-success" role="alert"> Barang Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}
		redirect('cHome','refresh');
	}
}
