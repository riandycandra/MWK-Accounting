<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Data Client MWK');
		$this->load->model('M_client');
		$data['data'] = $this->M_client->tampil_data()->result();
		$this->load->view('client/client',$data);
	}
	function tambah(){
		$this->load->model('M_client');
		$cp = $this->input->post('cp');
		$perusahaan = $this->input->post('perusahaan');
		$tlp = $this->input->post('tlp');
		$alamat = $this->input->post('alamat');
		$data = array(
			'nama_client' => $cp,
			'perusahaan' => $perusahaan,
			'alamat' => $alamat,
			'telepon' => $tlp
			);
		$this->M_client->input_data($data,'client');
		redirect (base_url('client/index'));
	}
 
	function hapus($id){
		$this->load->model('M_client');
		$where = array('id_client' => $id);
		$this->M_client->hapus_data($where,'client');
		redirect(base_url('client/index'));
	}
	function edit($id){
		$data = array(	'title'	=> 'Edit Data Client MWK');
		$this->load->model('M_client');
		$where = array('id_client' => $id);
		$data['client'] = $this->M_client->edit_data($where,'client')->result();
		$this->load->view('client/edit_client',$data);
	}
	function update_client(){
	$this->load->model('M_client');
	$id = $this->input->post('id');
	$cp = $this->input->post('cp');
	$perusahaan = $this->input->post('perusahaan');
	$tlp = $this->input->post('tlp');
	$alamat = $this->input->post('alamat');
 
	$data = array(
		'nama_client' => $cp,
		'perusahaan' => $perusahaan,
		'alamat' => $alamat,
		'telepon' => $tlp
	);
 
	$where = array(
		'id_client' => $id
	);
 
	$this->M_client->update_data($where,$data,'client');
	redirect(base_url('client/index'));
}
}