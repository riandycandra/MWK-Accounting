<?php 
 
class M_project extends CI_Model{
	function tampil_data(){
		return $this->db->get('project');
	}
    function viewproject()
    {
    $this->db->select('*');    
	$this->db->from('project');
	$this->db->join('produk', 'project.id_produk = produk.id_produk');
	$this->db->join('client', 'project.id_client = client.id_client');
	$this->db->join('karyawan', 'project.id_karyawan = karyawan.id_karyawan');
	$this->db->order_by('id_project','DESC');
	$query = $this->db->get();
	return $query ;
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
		function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$table){
	return $this->db->get_where($table,$where);
	}
	function buat_kode() { 
        $this->db->select('RIGHT(project.id_project,6) as kode', FALSE);
		$this->db->order_by('id_project','DESC');
		$this->db->limit(1);
		$query = $this->db->get('project');
		//cek dulu apakah ada sudah ada kode di tabel.
		if($query->num_rows() <> 0){
 		//jika kode ternyata sudah ada.
 			$data = $query->row();
 			$kode = intval($data->kode) + 1;
		}else{
 			//jika kode belum ada
			 $kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
  		$kodejadi = "PRJ".date('ymd').$kodemax;

 		 return $kodejadi;
		 }

//end of class 
}

