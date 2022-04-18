<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class treatment extends CI_Controller {

	public function __construct()
		{
			parent::__construct();

			if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/clogin"));}

			$this->load->model("m_treatment");

		}
	public function index()
	{
		$data['datatreatment']=$this->m_treatment->list_treatment();
		$this->load->view('admin/treatment',$data);
	}

	public function tambahTreatment()
	{	
		$this->m_treatment->rulesNew();

		if($this->form_validation->run() == false){
			$this->load->view('admin/tambahTreatment');
		} else{

		$namatreatment = $this->input->post('namatreatment');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');

			$data = array(
				'nama_treatment' => $namatreatment,
				'deskripsi' => $deskripsi,
				'harga' => $harga
			);
			$this->m_treatment->input_treatment($data,'treatment');
			redirect('admin/treatment');
		}
	}

	public function aksi_tambahTreatment()
	{	
		/**$this->m_treatment->rulesNew();

		if($this->form_validation->run() == false){
			$this->load->view('admin/tambahTreatment');
		} else{

		$namatreatment = $this->input->post('namatreatment');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');

			$data = array(
				'nama_treatment' => $namatreatment,
				'deskripsi' => $deskripsi,
				'harga' => $harga
			);
			$this->m_treatment->input_treatment($data,'treatment');
			redirect('admin/treatment');
		}**/
	} 

	function edit($id_treatment)
		{
			$where = array('id_treatment'=>$id_treatment);
			$data['ubahTreatment'] = $this->m_treatment->edit_treatment($where,'treatment')->result();
			$this->load->view('admin/editTreatment',$data);
		}

	function aksi_editTreatment()
	{		
			$id_treatment = $this->input->post('id_treatment');
			$nama_treatment = $this->input->post('nama_treatment');
			$deskripsi = $this->input->post('deskripsi');
			$harga = $this->input->post('harga');

			$data = array(
				'nama_treatment' => $nama_treatment,
				'deskripsi' => $deskripsi,
				'harga' => $harga
			);

			$where = array(
				'id_treatment' => $id_treatment
			);

			$this->m_treatment->update_treatment($where,$data,'treatment');
			redirect('admin/treatment');
	}

	function hapus($id_treatment)
		{
			$where = array('id_treatment' => $id_treatment);
			$this->m_treatment->hapus_treatment($where,'treatment');
			redirect('admin/treatment');
		}
}
