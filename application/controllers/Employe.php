<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employe extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Data Employe MWK');
		$this->load->model('M_employe');
		$data['data'] = $this->M_employe->tampil_data()->result();
		$this->load->view('employe/view',$data);
	}
	function tambah(){
		$this->load->model('M_employe');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$tlp = $this->input->post('tlp');
		$alamat = $this->input->post('alamat');
		$data = array(
			'nama' => $nama,
			'jabatan' => $jabatan,
			'alamat' => $alamat,
			'telepon' => $tlp
			);
		$this->M_employe->input_data($data,'karyawan');
		redirect (base_url('employe'));
	}
 
	function hapus($id){
		$this->load->model('M_employe');
		$where = array('id_karyawan' => $id);
		$this->M_employe->hapus_data($where,'karyawan');
		redirect(base_url('employe'));
	}
	function edit($id){
		$data = array(	'title'	=> 'Edit Data Employe MWK');
		$this->load->model('M_employe');
		$where = array('id_karyawan' => $id);
		$data['karyawan'] = $this->M_employe->edit_data($where,'karyawan')->result();
		$this->load->view('employe/edit',$data);
	}
	function update_client(){
	$this->load->model('M_employe');
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$jabatan = $this->input->post('jabatan');
	$tlp = $this->input->post('tlp');
	$alamat = $this->input->post('alamat');
 
	$data = array(
		'nama' => $nama,
		'jabatan' => $jabatan,
		'alamat' => $alamat,
		'telepon' => $tlp
	);
 
	$where = array(
		'id_karyawan' => $id
	);
 
	$this->M_employe->update_data($where,$data,'karyawan');
	redirect(base_url('employe'));
}
}