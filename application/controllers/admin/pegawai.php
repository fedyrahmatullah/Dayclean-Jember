<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends CI_Controller {

	public function __construct()
		{
			parent::__construct();

			if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/clogin"));}

			$this->load->model("m_pegawai");

		}
	public function index()
	{
		//if($this->session->userdata('level') != 'superadmin');
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
				'password' => md5($password)
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
			

			$data = array(
				'nm_pegawai' => $nm_pegawai,
				'alamat_pegawai' => $alamat_pegawai,
				'no_hp' => $no_hp,
				'level' => $level,
				'username' => $username
			);

			$where = array(
				'id_pegawai' => $id_pegawai
			);

			$this->m_pegawai->update_pegawai($where,$data,'pegawai');
			redirect('admin/home');
		}

		function hapusPegawai($id_pegawai)
		{
			$where = array('id_pegawai' => $id_pegawai);
			$this->m_pegawai->hapus_pegawai($where,'pegawai');
			redirect('admin/pegawai');
		}

		function editpass($id_pegawai)
		{
			$where = array('id_pegawai'=>$id_pegawai);
			$data['ubahpass'] = $this->m_pegawai->edit_pegawai($where,'pegawai')->result();
			$this->load->view('admin/gantipass',$data);
		}

		function updatepass()
		{
			$id_pegawai = $this->input->post('id_pegawai');
			$password = $this->input->post('password');
			

			$data = array(
				'password' => md5($password)
			);

			$where = array(
				'id_pegawai' => $id_pegawai
			);

			$this->m_pegawai->update_pegawai($where,$data,'pegawai');
			redirect('admin/pegawai/editPegawai/'.$id_pegawai);
		}
}
