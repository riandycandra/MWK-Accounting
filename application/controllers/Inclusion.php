<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inclusion extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Data Inclusion');
		$this->load->model('M_inclusion');
		$this->load->model('M_client');
		$data['rows'] = $this->M_client->tampil_data()->result();
		$data['data'] = $this->M_inclusion->tampil_data()->result();
		$this->load->view('pemasukan/pemasukan',$data);
	}
	function tambah(){
		$this->load->model('M_inclusion');
		$rp = $this->input->post('rp');
		$ket = $this->input->post('ket');
		$client_name = $this->input->post('client_name');
		$date = date('Y-m-d'); 
		$data = array(
			'date' => $date,
			'client_name' => $client_name,
			'nominal' => $rp,
			'keterangan' => $ket
			);
		$this->M_inclusion->input_data($data,'pemasukan');
		redirect (base_url('inclusion'));
	}
 
	function hapus($id){
		$this->load->model('M_inclusion');
		$where = array('id_pemasukan' => $id);
		$this->M_inclusion->hapus_data($where,'pemasukan');
		redirect(base_url('inclusion'));
	}

	function invoice($id){
		$data = array(	'title'	=> 'Kwitansi Pemasukan MWK');
		$this->load->model('M_invoice');
		$where = array('id_pemasukan' => $id);
		$data['data'] = $this->M_invoice->kwitansi($where,'pemasukan')->result();
		$this->load->view('inclusion/invoice',$data);
	}
	function print_invoice($id){
		$data = array(	'title'	=> 'Print Kwitansi Pemasukan MWK');
		$this->load->model('M_invoice');
		$where = array('id_pemasukan' => $id);
		$data['data'] = $this->M_invoice->kwitansi($where,'pemasukan')->result();
		$this->load->view('print-kwitansi',$data);
	}
}