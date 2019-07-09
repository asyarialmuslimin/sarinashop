<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- STORE -->
			<div id="store" class="col-md-12">
				

				<!-- store products -->
				<div class="row">

					<?php

                        foreach($produk as $row){
                            echo "<div class=\"col-md-3 col-xs-6\">
                            <div class=\"product\">
											<div class=\"product-img\">
												<img src=\"".base_url('upload/gambar_produk/').$row['foto']."\" alt=\"\" width=\"400px\" height=\"250px\">
											</div>
											<div class=\"product-body\">
												<p class=\"product-category\">".$row['kategori']."</p>
												<h3 class=\"product-name\"><a href=\"".base_url('index.php/awal/viewproduk/').$row['id_produk']."\">".$row['nama']."</a></h3>
												<h4 class=\"product-price\">Rp. ".number_format($row['harga'], 0)."</h4>
												<div class=\"product-rating\">
													<i class=\"fa fa-star\"></i>
													<i class=\"fa fa-star\"></i>
													<i class=\"fa fa-star\"></i>
													<i class=\"fa fa-star\"></i>
													<i class=\"fa fa-star\"></i>
												</div>
											</div>
											<div class=\"add-to-cart\">
												<form action=\"".base_url('index.php/awal/addcart/').$row['id_produk']."\">
												<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
												</form>
											</div>
										</div>
                            </div>";
                        }

                        ?>

					<!-- product -->

					<!-- /product -->
				</div>
				<!-- /store products -->
			</div>
			<!-- /STORE -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->