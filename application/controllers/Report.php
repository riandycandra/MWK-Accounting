<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Report Acounting MWK');
		$this->load->model('M_product');
		$data['data'] = $this->M_product->tampil_data()->result();
		$this->load->view('project/view',$data);
	}
	function project(){
		$data = array(	'title'	=> 'Report Project MWK');
		$this->load->model('M_project');
		$data['data'] = $this->M_project->viewproject()->result();
		$this->load->view('report/project',$data);
	}
	function payment(){
		$data = array(	'title'	=> 'Report Payment MWK');
		$this->load->model('M_payment');
		$data['data'] = $this->M_payment->tampil_data()->result();
		$this->load->view('report/payment',$data);
	}
	function inclusion(){
		$data = array(	'title'	=> 'Report Inclusion MWK');
		$this->load->model('M_inclusion');
		$data['data'] = $this->M_inclusion->tampil_data()->result();
		$this->load->view('report/inclusion',$data);
	}
	function spending(){
		$data = array(	'title'	=> 'Report Spending MWK');
		$this->load->model('M_pengeluaran');
		$data['data'] = $this->M_pengeluaran->tampil_data()->result();
		$this->load->view('report/spending',$data);
	}
	function spendinghapus($id){
		$this->load->model('M_pengeluaran');
		$where = array('id_pengeluaran' => $id);
		$this->M_pengeluaran->hapus_data($where,'pengeluaran');
		redirect(base_url('report/spending'));
	}
	function projecthapus($id){
		$this->load->model('M_project');
		$where = array('kode_project' => $id);
		$this->M_project->hapus_data($where,'project');
		redirect(base_url('report/project'));
	}

}