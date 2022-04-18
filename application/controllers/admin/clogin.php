<?php 
 
class clogin extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('mlogin');
 
	}
 
	function index(){
		$this->load->view('admin/loginadmin');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->mlogin->cek_login("pegawai",$where)->num_rows();
		if($cek > 0){

 			$pegawai = $this->db->query('SELECT * FROM pegawai where username = "'.$username.'"')->row();

 			$id_pegawai = $pegawai->id_pegawai;

 			$level = $pegawai->level;

			$data_session = array(
				'nama' => $username,
				'id_pegawai' => $id_pegawai,
				'level' => $level,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin/Home"));
 
		}else{
			echo "<script type='text/javascript'>
        			alert('Username & Password Anda Salah!');
        			history.back(self);
        		</script>";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin/clogin'));
	}
}