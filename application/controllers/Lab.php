<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_infaq');
		//cek_login();
	}

	public function index()
	{
		$data['judul'] = 'Laporan Infaq Masjid An-Nuur Sono';
		//	$data['customer'] = $this->db->get_where('customer', ['username' => $this->session->userdata('username')])->row_array();
	
			// Jika tombol cari di tekan
			if($this->input->post('submit')) {
				$data['keyword'] = $this->input->post('keyword');
				$this->session->set_userdata('keyword');
			} else if($this->input->post('submit')) {
				$data['keyword'] = $this->session->unset_userdata('keyword');
			} else {
				$data['keyword'] = $this->session->userdata('keyword');
			}

		$this->db->like('name', $data['keyword']);
		//$this->db->like('judul_kegiatan', $data['keyword']);
		$this->db->from('lapinfaq');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];

		// Konfigurasi Pagination
		$config['base_url'] = 'http://192.168.64.2/masjid/lab/index';
		// $config['total_rows'] = $this->Kategori_Artikel_model->countAllKategori();
		$config['per_page'] = 6;
		$config['num_links'] = 6;

		// STYLE
		$config['full_tag_open'] = '<nav><ul class="pagination ok">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['laporan'] = $this->M_infaq->lihat($config['per_page'], $data['start'], $data['keyword']);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('tamplate/home',$data);
			//$this->load->view('themeplates_admin/sidebar', $data);
			$this->load->view('kegiatan/infaqpdf', $data);
			$this->load->view('tamplate/footer');
		} 
	}
}
