		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Terbaru</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										
										<?php

										foreach($terbaru as $row){

										echo "
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
										</div>";
										}
										?>
										
										
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Terlaris</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">

									<?php

										foreach($terlaris as $row){

										echo "
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
										</div>";
										}
										?>	
									
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
