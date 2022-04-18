<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends CI_Controller {

	function __construct()
		{
			parent::__construct();

			$this->load->model("m_pegawai");

		}
	public function index()
	{
		$data['listpegawai']=$this->m_pegawai->list_pegawai();
		$this->load->view('admin/listPegawai',$data);
	}

	public function tambahPegawai()
	{	
		$this->load->view('admin/pegawai');
	}

	public function aksi_tambahpegawai()
		{
			$nm_pegawai = $this->input->post('nm_pegawai');
			$alamat_pegawai = $this->input->post('alamat_pegawai');
			$no_hp = $this->input->post('no_hp');
			$level = $this->input->post('level');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'nm_pegawai' => $nm_pegawai,
				'alamat_pegawai' => $alamat_pegawai,
				'no_hp' => $no_hp,
				'level' => $level,
				'username' => $username,
				'password' => $password
			);
			$this->m_pegawai->input_pegawai($data,'pegawai');
			redirect('admin/pegawai');
		}

	function editPegawai($id_pegawai)
		{
			$where = array('id_pegawai'=>$id_pegawai);
			$data['ubahpegawai'] = $this->m_pegawai->edit_pegawai($where,'pegawai')->result();
			$this->load->view('admin/editPegawai',$data);
		}

	function updatePegawai()
		{
			$id_pegawai = $this->input->post('id_pegawai');
			$nm_pegawai = $this->input->post('nm_pegawai');
			$alamat_pegawai = $this->input->post('alamat_pegawai');
			$no_hp = $this->input->post('no_hp');
			$level = $this->input->post('level');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'nm_pegawai' => $nm_pegawai,
				'alamat_pegawai' => $alamat_pegawai,
				'no_hp' => $no_hp,
				'level' => $level,
				'username' => $username,
				'password' => $password
			);

			$where = array(
				'id_pegawai' => $id_pegawai
			);

			$this->m_pegawai->update_pegawai($where,$data,'pegawai');
			redirect('admin/pegawai');
		}

		function hapusPegawai($id_pegawai)
		{
			$where = array('id_pegawai' => $id_pegawai);
			$this->m_pegawai->hapus_pegawai($where,'pegawai');
			redirect('admin/pegawai');
		}
}
