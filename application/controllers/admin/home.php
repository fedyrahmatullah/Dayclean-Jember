<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
						$this->load->model("m_transaksi");
			if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/clogin"));

		}

		}
	public function index()
	{
		$tanggal = date('Y-m-d');
		$data = array('duwekperhari'=>$this->m_transaksi->laporan_harian_sum($tanggal)
				);
		$this->load->view('admin/index',$data);
	}
	

	//LAPORAN

	public function laporanHarian()
	{
		$this->load->view('admin/laporanHarian');
	}

	//TRANSAKSI

	function transaksi()
	{
		$this->load->view('admin/transaksi');
	}

	function detailTransaksi()
	{
		$this->load->view('admin/detailTransaksi');
	}
}
