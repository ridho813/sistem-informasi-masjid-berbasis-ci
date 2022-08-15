<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infaq extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_infaq');
		//cek_login();
	}

	public function index()
	{
		$x = $this->session->userdata('id_user');
			if(isset($x)){
		$data['judul'] = 'Data Kas Masjid AN-Nuur';
		//$data['type'] = $this->db->get('type')->result_array();
		//$data['customer'] = $this->db->get_where('customer', ['username' => $this->session->userdata('username')])->row_array();

		// Pencarian
		if($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else if(!$this->input->post('submit')) {
			$data['keyword'] = $this->session->unset_userdata('keyword');
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('date', $data['keyword']);
		$this->db->from('tb_kas_masjid');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];

		// Konfigurasi Pagination
		$config['base_url'] = 'http://192.168.64.2/masjid/back_end/infaq/index';
		// $config['total_rows'] = $this->Kategori_Artikel_model->countAllKategori();
		// var_dump($config['total_rows']); die;
		$config['per_page'] = 2;
		$config['num_links'] = 2;

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

		$data['start'] = $this->uri->segment(4);
		$data['tb_kas_masjid'] = $this->M_infaq->gelAllprofil($config['per_page'], $data['start'], $data['keyword']);
		$data['tb_kategori_kas'] = $this->db->get('tb_kategori_kas')->result_array();

		$this->form_validation->set_rules('pemasukan', 'pemsukan', 'required|trim', ['required' => 'Pemasukan Harus Di Isi!']);
		$this->form_validation->set_rules('pengeluaran', 'pengeluaran');
		$this->form_validation->set_rules('date', 'date', 'required|trim',
		['required' => 'date Harus Di Isi!']);
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim',
		['required' => 'Keterangan Harus Di Isi!']);
		$this->form_validation->set_rules('id_kategori', 'id_kategori', 'required|trim',
		['required' => 'Jenis Kategori Harus Di Isi!']);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('back_end/head');
			//$this->load->view('themeplates_admin/sidebar', $data);
			$this->load->view('datakas', $data);
			$this->load->view('back_end/footer');
		} else {
			$this->M_infaq->tambah();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success"><i class="far fa-lightbulb"></i> Data Kategori Berhasil Ditambahkan.</div>');
			redirect('back_end/Infaq');
		}
	}else{
		redirect('back_end/login');
	}
}

	public function getkategoriartikel()
	{
		echo json_encode($this->M_infaq->getUbahKategori($_POST['id']));
		// echo $_POST['id'];
	}

//ubah infaq
	public function ubahkategori($id_transaksi)
	{
		$data['judul'] = 'Review Artikel';
		$data['kas'] = $this->db->get_where('tb_kas_masjid', ['id_transaksi' => $id_transaksi])->row_array();
		$data['tb_kategori_kas'] = $this->db->get('tb_kategori_kas')->result_array();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('back_end/head',$data);
			$this->load->view('back_end/editinfaq', $data);
			$this->load->view('back_end/footer',$data);
		} else {
			$this->terbit($id);
		}
	}
	public function ubahinfaq()
	{
		$pemasukan = $this->input->post('pemasukan', true);
		$pengeluaran = $this->input->post('pengeluaran', true);
		$keterangan = $this->input->post('keterangan', true);
		$id_kategori = $this->input->post('id_kategori', true);
		$id_transaksi = $this->input->post('id_transaksi', true);
		//$foto = $this->input->post('foto', true);
		$foto = $_FILES['foto']['name'];

		if($foto) {
			$config['allowed_types'] = 'gif|png|jpg|jpeg';
			$config['max_sizes'] = '16048';
			$config['upload_path'] = 'assets/infaq/';

			$this->load->library('upload', $config);

			if($this->upload->do_upload('foto')) {
				$this->upload->data('file_name');
			} else {
				echo $this->upload->display_errors();
			}
		}
		$this->db->set('pemasukan', $pemasukan);
		$this->db->set('pengeluaran',$pengeluaran);
		$this->db->set('keterangan',$keterangan);
		$this->db->set('id_kategori',$id_kategori);
		$this->db->set('foto', $foto);
		$this->db->where('id_transaksi',$id_transaksi);
		$this->db->update('tb_kas_masjid');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success"><i class="far fa-lightbulb"></i> Deskripsi Artikel Berhasil Di Ubah.</div>');
		redirect('back_end/infaq');
	}

	public function hapus($id)
	{
		$this->db->delete('tb_kas_masjid', ['id_transaksi' => $id]);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success"><i class="far fa-lightbulb"></i> Data Kategori Berhasil Dihapus.</div>');
		redirect('back_end/infaq');
	}



}
