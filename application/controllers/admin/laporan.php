<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

	public function __construct()
		{
			parent::__construct();

			if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/clogin"));}

			$this->load->model("m_transaksi");
			$this->load->model("m_treatment");


		}
	public function index()
	{	
		$tanggal = $this->input->post('tanggal');
		
		if (empty($tanggal)) {
			$tanggal = date('Y-m-d');
		}

			$data = array(
				'tanggal' => $tanggal,
				'laporan_harian'=>$this->m_transaksi->laporan_harian($tanggal),
				'laporan_harian_sum'=>$this->m_transaksi->laporan_harian_sum($tanggal)
			);

			$this->load->view('admin/laporanHarian',$data);
	}

	public function cetak($tanggal)
	{
		$data = array(
				'laporan_harian'=>$this->m_transaksi->laporan_harian($tanggal),
				'laporan_harian_sum'=>$this->m_transaksi->laporan_harian_sum($tanggal)
				);
		$this->load->view('admin/printlaporan',$data);
	}

	public function bulanan()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		
		if (empty($bulan)) {
			$bulan = date('m');
			$tahun = date('Y');
		}
		
			$data = array(
				'bulan' => $bulan,
				'tahun' => $tahun,
				'laporan_bulanan'=>$this->m_transaksi->laporan_bulanan($bulan,$tahun),
				'laporan_bulanan_sum'=>$this->m_transaksi->laporan_bulanan_sum($bulan,$tahun)
			);

			$this->load->view('admin/laporan_bulanan',$data);
	
	}
	public function cetak_bulanan($bulan,$tahun)
	{
		$data = array(
				'laporan_bulanan'=>$this->m_transaksi->laporan_bulanan($bulan,$tahun),
				'laporan_bulanan_sum'=>$this->m_transaksi->laporan_bulanan_sum($bulan,$tahun)
				);
		$this->load->view('admin/printlaporanbulanan',$data);
	}
}	