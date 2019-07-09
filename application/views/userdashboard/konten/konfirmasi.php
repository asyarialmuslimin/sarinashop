<div class="container">
	<h3>Konfirmasi Pesanan</h3>

	<div class="row">
		<div class="col-md-6">
			<h5>Lakukan Pembayaran Sejumlah Rp. <?php echo $total ?></h5><br>
            <h5>Ke Rekening Bank ABC dengan Nomor Rekening 0123456789</h5><br>
            <h5>Atas Nama SARINA Shop</h5><br>
		</div>
		<div class="col-md-6">
			<form method="POST" action="<?php echo base_url('index.php/dashboard/konfirmasipending') ?>">
				<input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran ?>" />
				<input type="hidden" name="id_konfirmasi" value="<?php echo uniqid() ?>" />
				<div class="form-group">
					<label for="bank">Rekening Bank</label>
					<input type="text" name="bank" class="form-control" id="bank" placeholder="Masukkan Nama Bank Anda">
				</div>
                <div class="form-group">
					<label for="norek">Nomor Rekening</label>
					<input type="number" name="norek" class="form-control" id="norek" placeholder="Masukkan Nomor Rekening">
				</div>
                <div class="form-group">
					<label for="nama">Atas Nama</label>
					<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Atas Nama pada Rekening">
				</div>
				<center> <button type="submit" class="btn btn-primary btn-block">Submit</button> </center>
			</form>
		</div>

	</div>
</div>