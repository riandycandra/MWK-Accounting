<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan'); 

class Simple_login {
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	// Fungsi login
	public function login($username, $password) {
		$query = $this->CI->db->get_where('users',array('username'=>$username,'password' => $password));
		if($query->num_rows() == 1) {
			$row 	= $this->CI->db->query('SELECT id_user FROM users where username = "'.$username.'"');
			$admin 	= $row->row();
			$id 	= $admin->id_user;
			$nama 	= $this->CI->db->query('SELECT nama FROM users where username = "'.$username.'"');
			$name 	= $nama->row();
			$user 	= $name->nama;
			$foto 	= $this->CI->db->query('SELECT foto FROM users where username = "'.$username.'"');
			$images 	= $foto->row();
			$image 	= $images->foto;
			$level 	= $this->CI->db->query('SELECT level FROM users where username = "'.$username.'"');
			$grad 	= $level->row();
			$grade 	= $grad->level;
			$pwd 	= $this->CI->db->query('SELECT password FROM users where username = "'.$username.'"');
			$pass 	= $pwd->row();
			$password 	= $pass->password;
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('pwd', $password);
			$this->CI->session->set_userdata('nama',$user);
			$this->CI->session->set_userdata('foto',$image);
			$this->CI->session->set_userdata('level',$grade);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id', $id);
			redirect(base_url('dhasboard'));
		}else{
			$this->CI->session->set_flashdata('sukses','Oops... Username / password incorrect,,!!!');
			redirect(base_url('login'));
		}
		return false;
	}
	// Proteksi halaman
	public function cek_login() {
		if($this->CI->session->userdata('username') == '') {
			$this->CI->session->set_flashdata('sukses','You are not logged');
			redirect(base_url('login'));
		}
	}
	// Fungsi logout
	public function logout() {
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->unset_userdata('level');
		$this->CI->session->set_flashdata('sukses','You have successfully logout');
		redirect(base_url('login'));
	}

	public function cek_session(){
		if($this->CI->session->userdata('level') != "Administrator") {
			redirect(base_url('dhasboard'));
		}
	}
}