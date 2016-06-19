<?php 
 
class M_dhasboard extends CI_Model{
	public function __construct()
 	{
 	parent::__construct();
 	}

	 function view($num, $offset)  {
  
  /*variable num dan offset digunakan untuk mengatur jumlah
    data yang akan dipaging, yang kita panggil di controller*/
  
  $query = $this->db->get("pemasukan",$num, $offset);
  return $query->result();
  
  }
  function judul() {
   $data = 'Dhasboard Aplication';
    return $data;
  }
  
	
	public function pemasukan(){
	$this->db->select('SUM(nominal) as total');
	$this->db->from('pemasukan');
	$data = $this->db->get()->row()->total;
	return $data;	
	}
	function tampil_data(){
		return $this->db->get('pemasukan');
	}
}