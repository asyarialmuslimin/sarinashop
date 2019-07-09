<!-- SECTION -->
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<h3>Cara Konfirmasi Pembayaran</h3>
                            <h5>Setelah Proses Checkout, anda diharuskan melakukan pembayaran sesuai jumlah nominal yang tertera pada pesanan anda. lakukan pembayaran melalui transfer ke Rekening Bank ABC dengan Nomor Rekening 0123456789 a/n SarinaSHOP <br><br>
 setelah melakukan pembayaran maka anda harus mengkonfirmasi pembayarannya untuk memberitahu kami bahwa anda sudah melakukan pembayaran pesanan anda. <br><br>
                                jika anda tidak melakukan konfirmasi pembayaran maka pesanan anda tidak akan kami proses. <br><br>
                                Untuk melakukan Konfirmasi Pembayaran, klik pada menu Konfirmasi Pembayaran di Beranda Profil anda, lalu isi form sesuai data pembayaran yang anda lakukan
                            </h5>
						</div>

					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">

                            <?php
                                foreach($cart as $row){
                                    echo "<div class=\"order-col\">
									<div>".$row['nama']."</div>
									<div>Rp. ".number_format($row['harga'], 0)."</div>
								</div>";
                                }
                            ?>
							</div>
							<div class="order-col">
								<div>Ongkir</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total"><?php echo "Rp .".number_format($total, 0) ?></strong></div>
							</div>
						</div>
						<a href="<?php echo base_url('index.php/awal/pendingbill') ?>" class="primary-btn order-submit">Checkout</a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->