<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{$x = $this->session->userdata('id_user');
        if(isset($x)){
		$this->load->view('back_end/head');
		$this->load->view('back_end/slide');
		$this->load->view('back_end/footer');
	}else{
		redirect('back_end/login');
	}
}
}
