<div class="container">
	<h3> <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>"><= </a> List Antrian</h3>
	<div class="table-responsive-sm">
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Nama Barang</th>
					<th scope="col">Nama Pemesan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal Pemesanan</th>
					<th scope="col">Hapus</th>
				</tr>
			</thead>
			<tbody>
				<?php
    		foreach ($order as $row)
        {
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['nama_user']."</td>";
            echo "<td>".$row['keterangan']."</td>";
            echo "<td>".$row['tanggal']."</td>";
            echo "<td><a href=\"".base_url("index.php/superuser/deleteantrian/").$row['id_antrian']."\" class=\"btn-floating waves-effect waves-light red\"><i class=\"fas fa-trash-alt\"style=\"font-size: 18px\"></i></i></a></td></tr>";
        }
                ?>
			</tbody>
		</table>
	</div>
</div>