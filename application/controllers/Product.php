<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Data Product MWK');
		$this->load->model('M_product');
		$data['data'] = $this->M_product->tampil_data()->result();
		$this->load->view('product/view',$data);
	}
	function tambah(){
		$this->load->model('M_product');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$data = array(
			'nama' => $nama,
			'harga' => $harga
			);
		$this->M_product->input_data($data,'produk');
		redirect (base_url('product'));
	}
 
	function hapus($id){
		$this->load->model('M_product');
		$where = array('id_product' => $id);
		$this->M_product->hapus_data($where,'produk');
		redirect(base_url('product'));
	}
	function edit($id){
		$data = array(	'title'	=> 'Edit Data Product MWK');
		$this->load->model('M_product');
		$where = array('id_produk' => $id);
		$data['produk'] = $this->M_product->edit_data($where,'produk')->result();
		$this->load->view('product/edit',$data);
	}
	function update_product(){
	$this->load->model('M_product');
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$harga = $this->input->post('harga');
 
	$data = array(
		'nama' => $nama,
		'harga' => $harga
	);
 
	$where = array(
		'id_produk' => $id
	);
 
	$this->M_product->update_data($where,$data,'produk');
	redirect(base_url('product'));
}
}