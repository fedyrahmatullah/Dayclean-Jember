<?php 
	/**
	 * 
	 */
	class m_treatment extends CI_Model
	{
		//data_treatment:
		function list_treatment()
		{
			$hasil=$this->db->query("SELECT id_treatment,nama_treatment,deskripsi,harga FROM treatment");

            return $hasil;
		}

		function edit_treatment($where,$table)
		{
			return $this->db->get_where($table,$where);
		}

		function update_treatment($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function input_treatment($data,$table)
		{
			$this->db->insert($table,$data);
		}

		function hapus_treatment($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}

		function rulesNew()
		{
			$data=[
			[
				'field'=>'namatreatment',
				'label'=>'Jenis Treatment',
				'rules'=>'required'
			],
			[
				'field'=>'deskripsi',
				'label'=>'Deskripsi',
				'rules'=>'required'
			],
			[
				'field'=>'harga',
				'label'=>'Harga',
				'rules'=>'required'
			]
			];

			$this->form_validation->set_rules($data);
		}
	}
?>