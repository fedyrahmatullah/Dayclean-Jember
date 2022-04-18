<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller {

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
		$data['list_transaksi']=$this->m_transaksi->list_transaksi();
		$this->load->view('admin/transaksi',$data);
	}

	public function detail_transaksi($invoice)
	{
		$data = array('invoice' 	=> $invoice,
					  'data_detail' => $this->m_transaksi->tampil_sepatu($invoice),
					  'treatment'	=> $this->m_treatment->list_treatment(),
					  'data_transaksi' => $this->m_transaksi->transaksi($invoice)->row(),
					  'sum_total' =>$this->m_transaksi->get_sum($invoice),
					  'sum_total_sepatu' =>$this->m_transaksi->get_sum1($invoice));

		$this->load->view('admin/detail_transaksi',$data);

	}

	public function tambah_treatment($invoice)
	{
		$treatment      = $this->input->post('treatment');
		$id_treatment	= $this->m_transaksi->id_treatment($treatment)->id_treatment;
		$jumlah_sepatu	= $this->input->post('jumlah_sepatu');
		$harga			= $this->m_transaksi->harga_treatment($treatment)->harga;
		$total			= $jumlah_sepatu*$harga;

		$data = array('invoice' 		=> $invoice,
					  'id_treatment'	=> $id_treatment,
					  'nama_treatment'	=> $treatment,
					  'jumlah_sepatu'	=> $jumlah_sepatu,
					  'total' 			=> $total);

		$this ->m_transaksi->input_transaksi($data,'detail_transaksi');
		redirect('admin/transaksi/detail_transaksi/'.$invoice); 
	}

	public function hapus_treatment($id_treatment,$invoice)
			{
				$where = array('id_treatment' => $id_treatment,
							   'invoice'	  => $invoice);
				$this->m_transaksi->hapus_transaksi($where,'detail_transaksi');
				redirect('admin/transaksi/detail_transaksi/'.$invoice);
			}

	public function simpan_total($invoice)
			{
				$where = array('invoice'=>$invoice);
				$data = array('total'=> $this->input->post('total_harga'),
							  'jumlah_sepatu'=> $this->input->post('total_sepatu'));
				
				$this->m_transaksi->update_transaksi($where,$data,'transaksi');
				redirect('admin/transaksi');
			}

	public function editstatus($invoice)
			{
				$where = array('invoice'=>$invoice);
				$this->load->view('admin/edit_status',$where);
			}
	public function updatestatus($invoice)
			{
				$status = $this->input->post('status');

				$data = array(
					'status' => $status
				);

				$where = array(
					'invoice' => $invoice
				);

				$this->m_transaksi->update_status($where,$data,'transaksi');
				redirect('admin/transaksi');
			}
	public function hapustransaksi($invoice)
		{
			$where = array('invoice' => $invoice);
			$this->m_transaksi->hapus_transaksi($where,'transaksi');
			redirect('admin/transaksi');
		}
}
