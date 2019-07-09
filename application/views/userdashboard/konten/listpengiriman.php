<div class="container">
<h3>List Pengiriman</h3>
<table class="table table-striped table-responsive">
  <thead>
    <tr>
      <th scope="col">Nama Ekspedisi</th>
      <th scope="col">Nomor Resi</th>
      <th scope="col">ID Pembayaran</th>
    </tr>
  </thead>
  <tbody>
  <?php
    		foreach ($pengiriman as $row)
        {
            echo "<tr><td>".$row['nama_ekspedisi']."</td>";
            echo "<td>".$row['resi']."</td>";
            echo "<td><a href=\"".base_url('index.php/dashboard/daftarorder/').$row['id_pembayaran']."\" >".$row['id_pembayaran']."</a></td></tr>";
        }
  ?>
  </tbody>
</table></div>