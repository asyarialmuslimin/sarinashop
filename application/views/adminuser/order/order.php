<div class="container">
	<h3>List Order</h3>
	<div class="table-responsive-sm">
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Id Pemesanan</th>
					<th scope="col">Nama Pemesan</th>
					<th scope="col">Total Pembayaran</th>
					<th scope="col">Status</th>
					<th scope="col">Waktu Pemesanan</th>
					<th scope="col">Hapus</th>
				</tr>
			</thead>
			<tbody>
				<?php
    		foreach ($order as $row)
        {
            echo "<tr><td><a href=\"".base_url('index.php/superuser/antrian/').$row['id_pembayaran']."\">".$row['id_pembayaran']."</a></td>";
            echo "<td>".$row['nama_user']."</td>";
            echo "<td>Rp. ".number_format($row['total'], 0)."</td>";
            echo "<td>".$row['keterangan']."</td>";
            echo "<td>".$row['tanggal']."</td>";
            echo "<td><a href=\"".base_url("index.php/superuser/deleteorder/").$row['id_pembayaran']."\" class=\"btn-floating waves-effect waves-light red\"><i class=\"fas fa-trash-alt\"style=\"font-size: 18px\"></i></i></a></td></tr>";
        }
                ?>
			</tbody>
		</table>
	</div>
</div>