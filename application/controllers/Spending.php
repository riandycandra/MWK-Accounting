<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spending extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Data Spending');
		$this->load->model('M_pengeluaran');
		$data['data'] = $this->M_pengeluaran->tampil_data()->result();
		$this->load->view('pengeluaran/index',$data);
	}
	function tambah(){
		$this->load->model('M_pengeluaran');
		$rp = $this->input->post('rp');
		$ket = $this->input->post('ket');
		$date = date('Y-m-d'); 
		$data = array(
			'tanggal' => $date,
			'besar' => $rp,
			'keterangan' => $ket
			);
		$this->M_pengeluaran->input_data($data,'pengeluaran');
		redirect (base_url('spending'));
	}
 
	function hapus($id){
		$this->load->model('M_pengeluaran');
		$where = array('id_pengeluaran' => $id);
		$this->M_pengeluaran->hapus_data($where,'pengeluaran');
		redirect(base_url('spending'));
	}


}