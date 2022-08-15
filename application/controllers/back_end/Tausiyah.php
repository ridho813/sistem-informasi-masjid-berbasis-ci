<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tausiyah extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_tausiyah');
		//cek_login();
	}

	public function index()
	{
		$x = $this->session->userdata('id_user');
			if(isset($x)){
		$data['judul'] = 'Data Tausiyah';
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

		$this->db->like('narasumber', $data['keyword']);
		$this->db->like('judul_kegiatan', $data['keyword']);
		$this->db->from('tb_kegiatan');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];

		// Konfigurasi Pagination
		$config['base_url'] = 'http://192.168.64.2/masjid/back_end/tausiyah/index';
		// $config['total_rows'] = $this->Kategori_Artikel_model->countAllKategori();
		$config['per_page'] = 4;
		$config['num_links'] = 4;

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
		$data['tb_kegiatan'] = $this->M_tausiyah->tampiltausiyah($config['per_page'], $data['start'], $data['keyword']);

		$data['tb_jenis_kegiatan'] = $this->db->get('tb_jenis_kegiatan')->result_array();

				$this->form_validation->set_rules('judul_kegiatan', 'judul_kegiatan', 'required|trim',
		 ['required' => 'Judul_kegiatan Harus Di Isi!']);
		 $this->form_validation->set_rules('jenis_kegiatan', 'jenis_kegiatan', 'required|trim',
		 ['required' => 'Jenis Kegiatan Harus Di Isi!']);
		 $this->form_validation->set_rules('seo_title', 'seo_title', 'required|trim',
		 ['required' => 'Slug Harus Di Isi!']);
		 $this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim',
		 ['required' => 'tanggal Harus Di Isi!']);
		 $this->form_validation->set_rules('jam_mulai', 'jam_mulai');
		 $this->form_validation->set_rules('jam_selesai');
		 $this->form_validation->set_rules('narasumber', 'narasumber', 'required|trim',
		 ['required' => 'Narasumber Harus Di Isi!']);
		 $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim',
		 ['required' => 'Keterangan Harus Di Isi!']);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('back_end/head');
			//$this->load->view('themeplates_admin/sidebar', $data);
			$this->load->view('back_end/tausiyah', $data);
			$this->load->view('back_end/footer');
		} else {
			$this->M_tausiyah->tambahArtikel();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success"><i class="far fa-lightbulb"></i> Data Kategori Berhasil Ditambahkan.</div>');
			redirect('back_end/tausiyah');
		}
	}else{
		redirect('back_end/login');
	}
	}

	// menampilkan berdasarkan id berita
	public function getubah() 
	{
		// echo $_POST['id'];
		echo json_encode($this->M_tausiyah->getArtikelUbah($_POST['id']));
	}

	// aksi ubah data tausiyah

	public function ubahartikel($seo_title)
	{
		$data['judul'] = 'Review Artikel';
		$data['kegiatan'] = $this->db->get_where('tb_kegiatan', ['id_kegiatan' => $seo_title])->row_array();
		$data['tb_jenis_kegiatan'] = $this->db->get('tb_jenis_kegiatan')->result_array();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('back_end/head',$data);
			$this->load->view('back_end/edittausiyah', $data);
			$this->load->view('back_end/footer',$data);
		} else {
			$this->terbit($id);
		}
	}
	public function ubahkegiatan()
	{
		$judul_kegiatan = $this->input->post('judul_kegiatan', true);
		$seo_title = $this->input->post('seo_title', true);
		$narasumber = $this->input->post('narasumber', true);
		$id_jenis = $this->input->post('id_jenis', true);
		$id_kegiatan = $this->input->post('id_kegiatan', true);
		//$foto = $this->input->post('foto', true);
		$foto = $_FILES['foto']['name'];

		if($foto) {
			$config['allowed_types'] = 'gif|png|jpg|jpeg';
			$config['max_sizes'] = '16048';
			$config['upload_path'] = 'assets/kegiatan/';

			$this->load->library('upload', $config);

			if($this->upload->do_upload('foto')) {
				$this->upload->data('file_name');
			} else {
				echo $this->upload->display_errors();
			}
		}
		$this->db->set('judul_kegiatan', $judul_kegiatan);
		$this->db->set('seo_title',$seo_title);
		$this->db->set( 'narasumber',$narasumber);
		$this->db->set('id_jenis',$id_jenis);
		$this->db->set('foto', $foto);
		$this->db->where('id_kegiatan',$id_kegiatan);
		$this->db->update('tb_kegiatan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success"><i class="far fa-lightbulb"></i> Deskripsi Artikel Berhasil Di Ubah.</div>');
		redirect('back_end/tausiyah');
	}

	public function hapus($id)
	{
		$this->db->where('id_kegiatan', $id);
		$row = $this->db->get('tb_kegiatan')->row_array();
		unlink('assets/kegiatan/' . $row['foto_berita']);
		$this->db->delete('tb_kegiatan', ['id_kegiatan' => $id]);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success"><i class="far fa-lightbulb"></i> Data Artikel Berhasil Di Hapus.</div>');
		redirect('back_end/tausiyah');
	}





}
