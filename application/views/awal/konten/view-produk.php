<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- Product main img -->
			<div class="col-md-6">
				<img src="<?php echo base_url('upload/gambar_produk/').$foto ?>" alt="" width="500px" height="400px">
			</div>
			<!-- /Product main img -->

			<!-- Product details -->
			<div class="col-md-6">
				<div class="product-details">
					<h2 class="product-name"><?php echo $nama ?></h2>
					<div>
						<h3 class="product-price"><?php "Rp. ".number_format($harga, 0) ?></h3>
						<span class="product-available">In Stock</span>
					</div>
					<p><?php echo $deskripsi ?></p>

					<div class="add-to-cart">
                    <form action="<?php echo base_url('index.php/awal/addcart/').$id_produk?>" >
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>

				</div>
			</div>
			<!-- /Product details -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>