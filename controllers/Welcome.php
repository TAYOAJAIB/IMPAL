<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$data['title'] = 'Login dolo';
		$this->load->view('welcome_message');
	}

	public function login(){
		$this->db->where('username',$this->input->post('user'));
		$this->db->where('password',$this->input->post('pass'));
		$u = $this->db->get('users');
		if ($u->num_rows()==1){
			$this->session->set_userdata('udahlogin','OK');
			redirect('Mahasiswa');
		}
		else{
			$this->session->set_flashdata('info','Username atau password salah');
			redirect('Welcome');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Welcome');
	}

	public function sekud()
	{
		echo "SEKAD SEKUD";
	}
}
