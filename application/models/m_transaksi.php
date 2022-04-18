<?php 
	/**
	 * 
	 */
	class m_transaksi extends CI_Model
	{
		//data_treatment:
		function list_transaksi()
		{
			$hasil=$this->db->query("SELECT * FROM transaksi");

            return $hasil;
		}

		function edit_transaksi($where,$table)
		{
			return $this->db->get_where($table,$where);
		}

		function transaksi($invoice)

		{
			return $this ->db -> query("SELECT * FROM transaksi where invoice='$invoice'");
		}

		function tampil_sepatu($invoice)

		{
			return $this ->db -> query("SELECT * FROM detail_transaksi where invoice='$invoice'");
		}

		function harga_treatment($treatment)

		{
			$hasil = $this->db->query("SELECT harga FROM treatment where nama_treatment='$treatment'");

			return $hasil->row();
		}

		function id_treatment($treatment)

		{
			$hasil = $this->db->query("SELECT id_treatment FROM treatment where nama_treatment='$treatment'");

			return $hasil->row();
		}

		function jumlah_semua_sepatu()

		{
			$hasil = $this->db->query("SELECT sum(jumlah_sepatu) as jumlah FROM detail_transaksi");

			return $hasil->row();
		}

		function update_transaksi($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function input_transaksi($data,$table)
		{
			$this->db->insert($table,$data);
		}

		function hapus_transaksi($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		function kode(){
			$this->db->SELECT('right(transaksi.invoice,2) as id',false);
			$this->db->order_by('id','DESC');
			$this->db->limit(1);
			$query=$this->db->get('transaksi');

			if ($query->num_rows() <> 0) {
				//cek kode jika telah tersedia

				$data=$query->row();
				$kode=intval($data->id)+1;
			}
			else {
				$kode=1; // cek jika kode belum terdapat pada table
			}

			$tgl=date('dmY');
			$batas=str_pad($kode,4,"0",STR_PAD_LEFT);
			$kodetampil="TR".$tgl.$batas; //format kode
			return $kodetampil;	
		}
		function get_sum($invoice)
		{
			$this->db->select_sum('total','total_semua');
			$this->db->from('detail_transaksi');
			$this->db->where('invoice' , $invoice);
			return $this->db->get('')->row();
		}
		function get_sum1($invoice)
		{
			$this->db->select_sum('jumlah_sepatu','total_sepatu');
			$this->db->from('detail_transaksi');
			$this->db->where('invoice' , $invoice);
			return $this->db->get('')->row();
		}

		function edit_status($where,$table)
		{
			return $this->db->get_where($table,$where);
		}
		function update_status($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function laporan_harian($tanggal){

			return $this ->db -> query("SELECT * FROM transaksi where tanggal='$tanggal' && status='selesai'");
		}

		function laporan_harian_sum($tanggal){
			

			$this->db->select_sum('total','total_semua');
			$this->db->from('transaksi');
			$this->db->where('tanggal' , $tanggal);
			$this->db->where('status' , 'selesai');
			return $this->db->get('')->row();
		}

		function laporan_bulanan($bulan,$tahun){

			return $this ->db -> query("SELECT * FROM transaksi WHERE status='Selesai' && month(transaksi.tanggal) = $bulan && year(transaksi.tanggal) = $tahun");
		}

		function laporan_bulanan_sum($bulan,$tahun){
			

			$this->db->select_sum('total','total_semua');
			$this->db->from('transaksi');
			$this->db->where('month(transaksi.tanggal)' , $bulan);
			$this->db->where('year(transaksi.tanggal)' , $tahun);
			$this->db->where('status' , 'selesai');
			return $this->db->get('')->row();
		}
	

		function cek_invoice($invoice){

			return $this ->db -> query("SELECT invoice FROM transaksi where invoice='$invoice'")->num_rows();	
		}

		function no_wa(){
			return $this->db->query("SELECT no_hp FROM pegawai WHERE level='superadmin'")->row();
		}

	}
?>