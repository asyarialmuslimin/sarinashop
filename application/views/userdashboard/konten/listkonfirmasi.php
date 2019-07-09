<div class="container">
<h3>List Konfirmasi Pesanan</h3>
<table class="table table-striped table-responsive">
  <thead>
    <tr>
      <th scope="col">Id Pesanan</th>
      <th scope="col">Total Pesanan</th>
      <th scope="col">Tanggal Pesanan</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Bayar</th>
    </tr>
  </thead>
  <tbody>
  <?php
    		foreach ($konfirmasi as $row)
        {
            echo "<tr><td><a href=\"".base_url('index.php/dashboard/daftarorder/').$row['id_pembayaran']."\" >".$row['id_pembayaran']."</a></td>";
            echo "<td>".$row['total']."</td>";
            echo "<td>".$row['tanggal']."</td>";
            echo "<td>".$row['keterangan']."</td>";
            echo "<td><a href=\"".base_url("index.php/dashboard/konfirmasipesanan/").$row['id_pembayaran']."\" class=\"btn btn-primary\">Bayar</td></tr>";
        }
  ?>
  </tbody>
</table></div>