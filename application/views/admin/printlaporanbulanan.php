<html>
<head>
  <title>Laporan</title>
    
    
</head>
<body>
     <center><h1 class="m-0 font-weight-bold text-primary">DATA LAPORAN</h1></center>
      <center><h3 class="m-0 font-weight-bold text-primary">DAYCLEAN JEMBER</h3></center>
    <center><table border="1" cellpadding="8">
    <thead>
                     <tr>
                          <th>Invoice</th>
                          <th>Tgl. Order</th>
                          <th>Nama</th>
                          <th>No.Hp</th>
                          <th>Alamat</th>
                          <th>Jumlah</th>
                          <th>Status</th>
                          <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php 
                        foreach ($laporan_bulanan->result_array() as $m):
                              $invoice=$m['invoice'];
 
                              $tanggal=$m['tanggal'];

                              $nama_user=$m['nama_user'];

                              $no_hp=$m['no_hp'];

                              $alamat_user=$m['alamat_user'];                            

                              $jumlah_sepatu=$m['jumlah_sepatu'];

                              $status=$m['status'];

                              $total=$m['total'];

                        ?>
                        <tr>
                          <td><?php echo $invoice."<br>"; ?></td>
                          <td><?php echo $tanggal."<br>"; ?></td>
                          <td><?php echo $nama_user."<br>"; ?></td>
                          <td><?php echo $no_hp."<br>"; ?></td>
                          <td><?php echo $alamat_user."<br>"; ?></td>
                          <td><?php echo $jumlah_sepatu."<br>"; ?></td>
                          <td><?php echo $status."<br>"; ?></td>
                          <td><?php echo $total."<br>"; ?></td>
                        </tr>
                        <?php endforeach;?>
                       <tr>
                          <th colspan="7" >Total</th>
                          <td><?php echo $laporan_bulanan_sum->total_semua?></td>
                       </tr>


    
    </center>
</table>
<script>
window.print();
</script>
</body>
</html>