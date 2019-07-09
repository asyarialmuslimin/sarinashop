<div class="container">
<h3><a href="<?php echo $_SERVER['HTTP_REFERER'] ?>" ><= </a>List Order</h3>
<div class="table-responsive-sm">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Foto</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
  <?php
    		foreach ($produk as $row)
        {
            echo "<tr><td>".$row['nama']."</td>";
            echo "<td><img src=\"".base_url("upload/gambar_produk/").$row['foto']."\" width=\"100px\" height=\"100px\" /></td>";
            echo "<td>Rp. ".number_format($row['harga'],0,',','.')."</td>";
        }
  ?>
  </tbody>
</table></div></div>