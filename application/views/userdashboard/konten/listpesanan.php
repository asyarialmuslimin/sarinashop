<div class="container">
<h3>List Pesanan</h3>
<table class="table table-striped table-responsive">
  <thead>
    <tr>
      <th scope="col">Id Pesanan</th>
      <th scope="col">Total Pesanan</th>
      <th scope="col">Tanggal Pesanan</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
  <?php
    		foreach ($pembayaran as $row)
        {
            echo "<tr><td><a href=\"".base_url('index.php/dashboard/daftarorder/').$row['id_pembayaran']."\" >".$row['id_pembayaran']."</a></td>";
            echo "<td>Rp. ".number_format($row['total'], 0)."</td>";
            echo "<td>".$row['tanggal']."</td>";
            echo "<td>".$row['keterangan']."</td>";
        }
  ?>
  </tbody>
</table></div>