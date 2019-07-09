<div class="container">
<?php

if($alert == "add"){
  echo "<div class=\"alert alert-success\" role=\"alert\">
  Sukses Menambahkan Produk
</div>";
}elseif($alert == "hapus"){
  echo "<div class=\"alert alert-success\" role=\"alert\">
  Sukses Menghapus Produk
</div>";
}elseif($alert == "edit"){
  echo "<div class=\"alert alert-success\" role=\"alert\">
  Sukses Mengedit Produk
</div>";
}

?>
<h3>List Produk</h3>
<div class="table-responsive-sm">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Foto</th>
      <th scope="col">Harga</th>
      <th scope="col">Diskon</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Stok</th>
      <th scope="col">Kategori</th>
      <th scope="col">Terjual</th>
      <th scope="col">Waktu Upload</th>
      <th scope="col">Edit</th>
      <th scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
  <?php
    		foreach ($produk as $row)
        {
            echo "<tr><td>".$row['nama']."</td>";
            echo "<td><img src=\"".base_url("upload/gambar_produk/").$row['foto']."\" width=\"100px\" height=\"100px\" /></td>";
            echo "<td>Rp. ".number_format($row['harga'],0,',','.')."</td>";
            echo "<td>Rp. ".number_format($row['diskon'],0,',','.')."</td>";
            echo "<td>".$row['deskripsi']."</td>";
            echo "<td>".$row['stok']."</td>";
            echo "<td>".$row['kategori']."</td>";
            echo "<td>".$row['terjual']."</td>";
            echo "<td>".$row['waktu_upload']."</td>";
            echo "<td><a href=\"".base_url("index.php/superuser/showproduk/").$row['id_produk']."\" class=\"btn-floating waves-effect waves-light green\"><i class=\"fas fa-user-edit\"style=\"font-size: 18px\"></i></a></td><td><a href=\"".base_url("index.php/superuser/deleteproduk/").$row['id_produk']."\" class=\"btn-floating waves-effect waves-light red\"><i class=\"fas fa-trash-alt\"style=\"font-size: 18px\"></i></i></a></td></tr>";
        }
  ?>
  </tbody>
</table></div></div>