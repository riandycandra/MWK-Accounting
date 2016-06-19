<?php 
 
class M_invoice extends CI_Model{
	function tampil_data(){
		return $this->db->get('view_project');
	}
	function input_data($data,$view){
		$this->db->insert($view,$data);
	}
		function update_data($where,$data,$view){
		$this->db->where($where);
		$this->db->update($view,$data);
	}	
	function hapus_data($where,$view){
		$this->db->where($where);
		$this->db->delete($view);
	}
	function edit_data($where,$view){	
	return $this->db->get_where($view,$where);
	}

	function kwitansi($where,$view){
		return $this->db->select('*')->from($view)->join('client', 'client.id_client=pemasukan.client_name')->where($where)->get();
	}

	function get_recent() {
		return $this->db->limit(1)->select('*')->from('pemasukan')->order_by('id_pemasukan', 'DESC')->get();
	}
}

