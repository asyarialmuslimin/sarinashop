<div class="container">
<?php

if($alert == "add"){
  echo "<div class=\"alert alert-success\" role=\"alert\">
  Sukses Menambahkan User
</div>";
}elseif($alert == "hapus"){
  echo "<div class=\"alert alert-success\" role=\"alert\">
  Sukses Menghapus User
</div>";
}elseif($alert == "edit"){
  echo "<div class=\"alert alert-success\" role=\"alert\">
  Sukses Mengedit User
</div>";
}

?>
<h3>List User</h3>
<table class="table table-striped table-responsive">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No. Telp</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Level</th>
      <th scope="col">Edit</th>
      <th scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
  <?php
    		foreach ($user as $row)
        {
            echo "<tr><td>".$row['nama_user']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['telepon']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>*********************</td>";
            echo "<td>".$row['level']."</td>";
            echo "<td><a href=\"".base_url("index.php/superuser/showuser/").$row['id_user']."\" class=\"btn-floating waves-effect waves-light green\"><i class=\"fas fa-user-edit\"style=\"font-size: 18px\"></i></a></td><td><a href=\"".base_url("index.php/superuser/deleteuser/").$row['id_user']."\" class=\"btn-floating waves-effect waves-light red\"><i class=\"fas fa-trash-alt\"style=\"font-size: 18px\"></i></i></a></td></tr>";
        }
  ?>
  </tbody>
</table></div>