<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lap extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_infaq');
		//cek_login();
	}


	public function index()
	{$x = $this->session->userdata('id_user');
        if(isset($x)){
			$data['judul'] = 'Data Lapaoran Infaq';
				// Jika tombol cari di tekan
				if($this->input->post('submit')) {
					$data['keyword'] = $this->input->post('keyword');
					$this->session->set_userdata('keyword');
				} else if($this->input->post('submit')) {
					$data['keyword'] = $this->session->unset_userdata('keyword');
				} else {
					$data['keyword'] = $this->session->userdata('keyword');
				}
	
			$this->db->like('id', $data['keyword']);
			//$this->db->like('judul_kegiatan', $data['keyword']);
			$this->db->from('lapinfaq');
			$config['total_rows'] = $this->db->count_all_results();
			$data['total_rows'] = $config['total_rows'];
	
			// Konfigurasi Pagination
			$config['base_url'] = 'http://192.168.64.2/masjid/back_end/Lap/index';
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
			$data['laporan'] = $this->M_infaq->gelAllinfaq($config['per_page'], $data['start'], $data['keyword']);
			
				$this->load->view('back_end/head');
				//$this->load->view('themeplates_admin/sidebar', $data);
				$this->load->view('back_end/laporan', $data);
				$this->load->view('back_end/footer');
			
			
		}else{
			redirect('back_end/login');
		}

		}

		public function do_upload(){
			{
			$name			= $_FILES['name'];
				if($foto=''){}else{
					$config ['upload_path']	='assets/infaqpdf';
					$config ['allowed_types']	='gif|jpg|png|pdf|doc|docx';
		
					$this->load->library('upload',$config);
					if(!$this->upload->do_upload('name')){
						echo "File Masuk Gagal Diupload!"; die();
					}else{		
						$foto=$this->upload->data('file_name');
					}
				}
				$data = array(
					
					'name'		=> $foto
				);
		
				$this->M_infaq->insert_data($data);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>File !</strong> Berhasil Ditambahnkan.</div>');
				redirect('back_end/lap');
			}
}




public function hapus($id)
{
	$this->db->delete('lapinfaq', ['id' => $id]);
	$this->session->set_flashdata('pesan', '<div class="alert alert-success"><i class="far fa-lightbulb"></i> Data Kategori Berhasil Dihapus.</div>');
	redirect('back_end/lap');
}

}
