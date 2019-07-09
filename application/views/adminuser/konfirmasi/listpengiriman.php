<div class="container">
<?php

if($alert == "add"){
  echo "<div class=\"alert alert-success\" role=\"alert\">
  Sukses Menambah Pengiriman
</div>";
}elseif($alert == "edit"){
    echo "<div class=\"alert alert-success\" role=\"alert\">
  Sukses Mengedit Pengiriman
</div>";
}elseif($alert == "hapus"){
    echo "<div class=\"alert alert-success\" role=\"alert\">
  Sukses Menghapus Pengiriman
</div>";
}

?>
<h3>List Pengiriman</h3>
<div class="table-responsive-sm">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nama Ekspedisi</th>
      <th scope="col">Nomor Resi</th>
      <th scope="col">ID Pembayaran</th>
      <th scope="col">Edit</th>
      <th scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
  <?php
    		foreach ($pengiriman as $row)
        {
            echo "<tr><td>".$row['nama_ekspedisi']."</td>";
            echo "<td>".$row['resi']."</td>";
            echo "<td>".$row['id_pembayaran']."</td>";
            echo "<td><a href=\"".base_url("index.php/superuser/editpengiriman/").$row['id_pengiriman']."\" class=\"btn-floating waves-effect waves-light red\"><i class=\"fas fa-user-edit\"style=\"font-size: 18px\"></i></i></a></td>
            <td><a href=\"".base_url("index.php/superuser/deletepengiriman/").$row['id_pengiriman']."\" class=\"btn-floating waves-effect waves-light red\"><i class=\"fas fa-trash-alt\"style=\"font-size: 18px\"></i></i></a></td>
            </tr>";
        }
  ?>
  </tbody>
</table></div></div>