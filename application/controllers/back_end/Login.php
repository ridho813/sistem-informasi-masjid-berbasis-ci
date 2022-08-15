<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_profil');
		//cek_login();
	}

public function index(){
	//$this->load->view('back_end/head');
	$this->load->view('back_end/userlogin');
	//$this->load->view('back_end/footer');
}

public function proses_login_admin()
{
	$email = $this->input->post('email');
	$password = MD5($this->input->post('password'));
	
	$result = $this->M_profil->login($email, $password);
	//$result2 = $this->M_dashboard->cekLogin2_admin($email, $password);
	if ($result == 0) {
		$this->session->set_flashdata('gagal','username / password anda salah');
		redirect('back_end/login');            
	} else{
		$this->session->set_userdata($result);
		//$this->session->set_flashdata('berhasil','Terimakasih');
		redirect('back_end/home');
	}
}
		public function logout()
		{
			$this->session->sess_destroy();//hapus session userdata
			redirect("depan");
		} 
  



}
