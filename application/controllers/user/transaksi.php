<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller {

	function __construct()
		{
			parent::__construct();

			$this->load->model("m_transaksi");
			$this->load->model("m_treatment");
			
		}
	public function index()
	{
		$data = [
			'invoice'=>$this->m_transaksi->kode(),
			'treatment'=>$this->m_treatment->list_treatment()
		];

		$this->load->view('user/transaksi',$data);

	}

	public function data_user($invoice)
	{
		$tanggal	= date('Y-m-d');
		$nama		= $this->input->post('nama_user');
		$alamat		= $this->input->post('alamat_user');
		$telepon	= $this->input->post('no_hp');
		$status		= $this->input->post('status');

		$data = array('invoice' => $invoice,
					  'tanggal' => $tanggal,
					  'nama_user' => $nama,
					  'alamat_user' => $alamat,
					  'no_hp' => $telepon,
					  'status' => $status );

		$this -> m_transaksi -> input_transaksi($data,'transaksi');

		redirect('user/transaksi/transaksi2/'.$invoice.'/'.$nama);
	}

	public function transaksi2($invoice,$nama){
		$data = array(
			'invoice'		=> $invoice,
			'nama'			=> $nama,
			'detail_sepatu' => $this->m_transaksi->tampil_sepatu($invoice),
			'treatment'=>$this->m_treatment->list_treatment(),
			'sum_total' =>$this->m_transaksi->get_sum($invoice),
			'sum_total_sepatu' =>$this->m_transaksi->get_sum1($invoice)

		);

		$this->load->view('user/transaksi2',$data);
	}

	public function tambah_treatment($invoice,$nama)
	{
		$treatment		= $this->input->post('treatment');
		$id_treatment	= $this->m_transaksi->id_treatment($treatment)->id_treatment;
		$jumlah_sepatu	= $this->input->post('jumlah_sepatu');
		$harga			= $this->m_transaksi->harga_treatment($treatment)->harga;
		$total			= $jumlah_sepatu*$harga;

		$data = array('invoice' => $invoice,
					  'id_treatment' => $id_treatment,
					  'nama_treatment' => $treatment,
					  'jumlah_sepatu' => $jumlah_sepatu,
					  'total' => $total,
					  );		

		$this ->m_transaksi->input_transaksi($data,'detail_transaksi');
		redirect('user/transaksi/transaksi2/'.$invoice.'/'.$nama);

	}

	public function hapus_treatment($id_treatment,$invoice,$nama)
			{
				$where = array('id_treatment' => $id_treatment,
							   'invoice'	  => $invoice);
				$this->m_transaksi->hapus_transaksi($where,'detail_transaksi');
				redirect('user/transaksi/transaksi2/'.$invoice.'/'.$nama);
			}

	public function simpan_total($invoice)
			{
				$where = array('invoice'=>$invoice);
				$data = array('total'=> $this->input->post('total_harga'),
							  'jumlah_sepatu'=> $this->input->post('total_sepatu'));
				
				$this->m_transaksi->update_transaksi($where,$data,'transaksi');

				$no_wa = $this->m_transaksi->no_wa()->no_hp;

				redirect('https://api.whatsapp.com/send?phone='.$no_wa.'&text=Halo%20admin,%20Invoice%20saya%20'.$invoice.'%20segera%20diproses.');
				
			}
	public function cek_invoice(){
				$invoice = $this->input->post('invoice');

				$cek = $this->m_transaksi->cek_invoice($invoice);

				if ($cek>0) {
					$data['invoice']=$this->m_transaksi->transaksi($invoice)->row();

					$this->load->view('user/invoice',$data);
				} else {
					//redirect('user/home');
					echo '<script language="javascript">alert("Invoice yang diinputkan Tidak Ditemukan");</script>';
					echo '<script>window.location.href=document.referrer;</script>';
				}
			}
}
