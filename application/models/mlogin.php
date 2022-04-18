<?php 
 
class mlogin extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	/**function ambil_data($username)
		{
			$pegawai=$this->db->query("SELECT username,id_pegawai FROM pegawai where username = '.$username.'")->row();

            return $pegawai;
		}**/	
}