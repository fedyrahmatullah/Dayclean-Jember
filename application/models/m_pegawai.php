<?php 
	/**
	 * 
	 */
	class m_pegawai extends CI_Model
	{
		//data_treatment:
		function list_pegawai()
		{
			$hasil=$this->db->query("SELECT id_pegawai,nm_pegawai,alamat_pegawai,no_hp,level FROM pegawai");

            return $hasil;
		}

		function edit_pegawai($where,$table)
		{
			return $this->db->get_where($table,$where);
		}

		function update_pegawai($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function input_pegawai($data,$table)
		{
			$this->db->insert($table,$data);
		}

		function hapus_pegawai($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}
	}
?>