<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Payment Project For MWK');
		$this->load->model('M_project');
		
		$data['data'] = $this->M_project->viewproject()->result();
		
		$this->load->view('payment/view',$data);
	}
	function bayar($id){
		$data = array(	'title'	=> 'Payment Action MWK');
		$this->load->model('M_project');
		$this->load->model('M_client');
		$this->load->model('M_employe');
		$data['rows'] = $this->M_client->tampil_data()->result();
		$data['baris'] = $this->M_employe->tampil_data()->result();
		$where = array('kode_project' => $id);
		$data['view'] = $this->M_project->edit_data($where,'project')->result();
		$this->load->view('payment/add',$data);
	}
	function tambah(){
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_project');
		$this->load->model('M_invoice');
		$kode = $this->input->post('kode');
		$debt = $this->input->post('debt');
		$pay = $this->input->post('pay');
		$rest = $this->input->post('rest');
		$id = $this->input->post('id');
		$bayar = $this->input->post('bayar');
		$sisa = $this->input->post('sisa');
		$client = $this->input->post('client');
		$tgl = date('Y-m-d');
		$data = array(
		'bayar' => $pay + $bayar,
		'sisa' => $sisa - $pay,
		);
	 
		$where = array(
			'id_project' => $id
		);
		$payment = array(
			'kode_project' => $kode,
			'pay' => $pay,
			'tanggal' => $tgl
			);
		$pays = array(
			'client_name' => $client,
			'keterangan' => $kode,
			'nominal' => $pay,
			'date' => $tgl
			);
		$this->M_project->update_data($where,$data,'project');
		$this->M_project->input_data($payment,'payment');
		$this->M_project->input_data($pays,'pemasukan');
		$data['redirect'] = $this->M_invoice->get_recent()->result();
		$this->load->view('redirect', $data);
	}
	function view(){
		$data = array(	'title'	=> 'Data Project For MWK');
		$this->load->model('M_project');
		
		$data['data'] = $this->M_project->viewproject()->result();
		
		$this->load->view('project/tampil',$data);
	}
	
}