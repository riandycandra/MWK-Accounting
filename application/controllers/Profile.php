<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	public function __Construct(){
   		parent ::__construct();
   		$this->load->model('M_profile');
   		$this->load->helper(array('form', 'url'));
	}

	public function index() {
		$data = array(	'title'	=> 'Profile User Aplication MWK');
		$data['data'] = $this->M_profile->tampil_data()->result();
		$this->load->view('profile/index',$data);
	}

	public function update_profile(){
		$id = $this->session->userdata('id');
		$name = $this->input->post('nama');
		$data = array(
			'nama' => $name
		);
		$where = array(
			'id_user' => $id
		);
		$this->M_profile->update_data($where,$data,'users');
		$this->session->set_userdata('nama', $name);
		redirect(base_url('profile'));
	}

	public function change_password(){
		$id = $this->session->userdata('id');
		$old_pass = $this->input->post('old_password');
		$new_pass = $this->input->post('new_password');
		$new_pass_again = $this->input->post('new_password_again');
		$db_pass = $this->db->query("SELECT password FROM users WHERE id_user='$id'");
		$url['url'] = base_url('profile');
		foreach($db_pass->result() as $row){
			if($old_pass == $row->password){
				if($new_pass == $new_pass_again){
					$data = array(
						'password' => $new_pass
						);
					$where = array(
						'id_user' => $id
						);
					$this->M_profile->update_data($where,$data,'users');
				} else {
					$url['msg'] = "Password Baru Tidak Sama";
					$this->load->view('errors/result', $url);
				}
				$url['msg'] = "Password Berhasil Diganti";
				$this->load->view('errors/result', $url);
			} else {
				$url['msg'] = "Password Lama Tidak Sama";
				$this->load->view('errors/result', $url);
			}
		}
	}

	public function change_photo(){
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|png|jpg|jpeg|bmp';
		$this->load->library('upload', $config);
		$data['url'] = base_url('profile');
		$id = $this->session->userdata('id');
		if($this->upload->do_upload('berkas')){
			$data['msg'] = "Update Photo Success";
			$upload_data = $this->upload->data();
			$this->session->set_userdata('foto', $upload_data['file_name']);
			$sql = array(
				'foto' => $upload_data['file_name']
			);
			$where = array(
				'id_user' => $id
			);
			$this->M_profile->update_data($where,$sql,'users');
		} else {
			$data['msg'] = $this->upload->display_errors();
		}
		$this->load->view('errors/result', $data);
	}
}