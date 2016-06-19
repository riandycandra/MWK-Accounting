<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addproject extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Add Project For MWK');
		$this->load->model('M_product');
		
		$data['data'] = $this->M_product->tampil_data()->result();
		
		$this->load->view('project/view',$data);
	}
	function shoopingcart($id){
		$data = array(	'title'	=> 'Shooping Cart Project MWK');
		$this->load->model('M_product');
		$this->load->model('M_client');
		$this->load->model('M_employe');
		$data['rows'] = $this->M_client->tampil_data()->result();
		$data['baris'] = $this->M_employe->tampil_data()->result();
		$where = array('id_produk' => $id);
		$data['product'] = $this->M_product->edit_data($where,'produk')->result();
		$this->load->view('project/save',$data);
	}
	function tambah(){
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_project');
		$this->load->model('M_client');
		$id = $this->input->post('id');
		$client = $this->input->post('client');
		$karyawan = $this->input->post('karyawan');
		$harga = $this->input->post('harga');
		$bayar = $this->input->post('dp');
		$sisa = $this->input->post('sisa');
		$kode = $this->M_project->buat_kode();
		$tgl = date('Y-m-d');
		$data = array(
			'kode_project' => $kode,
			'id_produk' => $id,
			'id_client' => $client,
			'id_karyawan' => $karyawan,
			'harga' => $harga,
			'bayar' => $bayar,
			'sisa' => $sisa,
			'tanggal' => $tgl
			);
			$pay = array(
			'kode_project' => $kode,
			'pay' => $bayar,
			'tanggal' => $tgl
			);
			$pays = array(
			'client_name' => $client,
			'keterangan' => $kode,
			'nominal' => $bayar,
			'date' => $tgl
			);
		$this->M_project->input_data($data,'project');
		$this->M_project->input_data($pay,'payment');
		$this->M_project->input_data($pays,'pemasukan');
		redirect (base_url('addproject/view'));
	}
	function view(){
		$data = array(	'title'	=> 'Data Project For MWK');
		$this->load->model('M_project');
		
		$data['data'] = $this->M_project->viewproject()->result();
		
		$this->load->view('project/tampil',$data);
	}
	function invoice($id){
		$data = array(	'title'	=> 'Invoice Project MWK');
		$this->load->model('M_invoice');
		$where = array('kode_project' => $id);
		$data['data'] = $this->M_invoice->edit_data($where,'view_project')->result();
		$this->load->view('project/invoice',$data);
	}
	function print_invoice($id){
		$data = array(	'title'	=> 'Print Invoice Project MWK');
		$this->load->model('M_invoice');
		$where = array('kode_project' => $id);
		$data['data'] = $this->M_invoice->edit_data($where,'view_project')->result();
		$this->load->view('print',$data);
	}
}