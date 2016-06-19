<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dhasboard extends CI_Controller {
	public function __Construct(){
   parent ::__construct();
   
   $this->load->model('M_dhasboard');
  
   /* memanggil atau mengkoneksikan model pagination
     dengan controller pagination */
  }
	// Index login
	public function index($offset=0) {
   $jml = $this->db->get('pemasukan');
   
   $config['base_url'] = base_url().'dhasboard/index';
   
   $config['total_rows'] = $jml->num_rows();
   $config['per_page'] = 5; /*Jumlah data yang dipanggil perhalaman*/ 
   $config['uri_segment'] = 5; /*data selanjutnya di parse diurisegmen 3*/
   
   /*Class bootstrap pagination yang digunakan*/
   $config['full_tag_open'] = " <ul class='pagination pagination-sm inline'>";
      $config['full_tag_close'] ="</ul>";
   $config['num_tag_open'] = '<li>';
   $config['num_tag_close'] = '</li>';
   $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
   $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
   $config['next_tag_open'] = "<li>";
   $config['next_tagl_close'] = "</li>";
   $config['prev_tag_open'] = "<li>";
   $config['prev_tagl_close'] = "</li>";
   $config['first_tag_open'] = "<li>";
   $config['first_tagl_close'] = "</li>";
   $config['last_tag_open'] = "<li>";
   $config['last_tagl_close'] = "</li>";
  
   $this->pagination->initialize($config);
   
   $data['halaman'] = $this->pagination->create_links();
   /*membuat variable halaman untuk dipanggil di view nantinya*/
   $data['offset'] = $offset;
   $data['data'] = $this->M_dhasboard->view($config['per_page'], $offset);
  	$data['title'] = $this->M_dhasboard->judul();
	$data['pemasukan'] = $this->M_dhasboard->pemasukan();
   $this->load->view('dhasboard',$data);
   /*memanggil view pagination*/	
   }
	
	// Fungsi Akunting
	public function inclusion() {
		$data = array(	'title'	=> 'Data Inclusion ',
						'isi'	=> 'pemasukan');
		$this->load->view('pemasukan',$data);
	}
	public function spending() {
		$data = array(	'title'	=> 'Data Spending ',
						'isi'	=> 'dasbor_view');
		$this->load->view('pengeluaran/index',$data);
	}
	
}