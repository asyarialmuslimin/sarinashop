<div class="container">
<?php

if($alert == "terbayar"){
  echo "<div class=\"alert alert-success\" role=\"alert\">
  Sukses Konfirmasi Pembayaran
</div>";
}

?>
<h3>List Konfirmasi</h3>
<div class="table-responsive-sm">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nama Bank</th>
      <th scope="col">Nomor Rekening</th>
      <th scope="col">Atas Nama</th>
      <th scope="col">ID Pembayaran</th>
      <th scope="col">Konfirmasi</th>
    </tr>
  </thead>
  <tbody>
  <?php
    		foreach ($konfirmasi as $row)
        {
            echo "<tr><td>".$row['rekening']."</td>";
            echo "<td>".$row['norek']."</td>";
            echo "<td>".$row['nama_rekening']."</td>";
            echo "<td>".$row['id_pembayaran']."</td>";
            echo "<td><a href=\"".base_url("index.php/superuser/billkonfirmasi/").$row['id_konfirmasi']."\" class=\"btn-floating waves-effect waves-light red\"><i class=\"fas fa-fw fa-check\"style=\"font-size: 18px\"></i></i></a></td></tr>";
        }
  ?>
  </tbody>
</table></div></div>