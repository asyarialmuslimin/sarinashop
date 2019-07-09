<!-- HEADER -->
<header>
	<!-- TOP HEADER -->
	<div id="top-header">
		<div class="container">
			<ul class="header-links pull-right">
			<?php
			if($level == "Admin"){
				echo "<li><a href=\"".base_url('index.php/superuser')."\"><i class=\"fa fa-cogs\"></i> Admin</a></li>";
			}
			?>
				<li><a href="<?php echo base_url('index.php/dashboard') ?>"><i class="fa fa-user"></i> Profil</a></li>
				<li><a href="<?php echo base_url('index.php/awal/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /TOP HEADER -->
	<!-- MAIN HEADER -->
	<div id="header">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- LOGO -->
				<div class="col-md-3">
					<div class="header-logo">
						<a href="<?php echo base_url() ?>" class="logo">
							<img src="<?php echo base_url('asset/img/logo.png') ?>" alt="">
						</a>
					</div>
				</div>
				<!-- /LOGO -->

				<!-- SEARCH BAR -->
				<div class="col-md-6">
					<div class="header-search">
						<form action="<?php echo base_url('index.php/awal/cariproduk') ?>" method="POST">
							<select class="input-select" name="kategori">
								<option value="">All Categories</option>
								<option value="Ruang Tamu">R. Tamu</option>
								<option value="Ruang Keluarga">R. Keluarga</option>
								<option value="Kamar Tidur">Kamar Tidur</option>
								<option value="Dapur">Dapur</option>
								<option value="Lain lain">Lain lain</option>
							</select>
							<input class="input" name="nama" placeholder="Search here">
							<button class="search-btn">Search</button>
						</form>
					</div>
				</div>
				<!-- /SEARCH BAR -->
				<!-- ACCOUNT -->
				<div class="col-md-3 clearfix">
					<div class="header-ctn">
						<!-- Cart -->
						<div class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<i class="fa fa-shopping-cart"></i>
								<span>Your Cart</span>
								<div class="qty"><?php echo $numrow ?></div>
							</a>
							<div class="cart-dropdown">
								<div class="cart-list">

									<?php
											foreach($cart as $row){
												echo "<div class=\"product-widget\">
												<div class=\"product-img\">
													<img src=\"".base_url('upload/gambar_produk/').$row['foto']."\" width=\"100px\" height=\"100px\">
												</div>
												<div class=\"product-body\">
													<h3 class=\"product-name\"><a href=\"#\">".$row['nama']."</a></h3>
													<h4 class=\"product-price\">".$row['harga']."</h4>
												</div>
												<a href=\"".base_url('index.php/awal/delcart/').$row['id_cart']."\" class=\"delete\"><i class=\"fa fa-close\"></i></a>
											</div>";
											}
										?>
								</div>
								<div class="cart-summary">
									<h5>Total Harga : <?php echo $total ?></h5>
								</div>
								<div class="cart-btns">
									<a href="#">View Cart</a>
									<a href="<?php echo base_url('index.php/awal/checkout') ?>">Checkout <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						<!-- /Cart -->
					</div>
				</div>
				<!-- /ACCOUNT -->
			</div>
			<!-- row -->
		</div>
		<!-- container -->
	</div>
	<!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<nav id="navigation">
	<!-- container -->
	<div class="container">
		<!-- responsive-nav -->
		<div id="responsive-nav">
			<!-- NAV -->
			<ul class="main-nav nav navbar-nav">
				<li class="<?php echo $this->uri->segment(3) == '' ? 'active' : '' ?>"><a
						href="<?php echo base_url() ?>">Home</a></li>
				<li class="<?php echo $this->uri->segment(3) == 'Ruang%20Tamu' ? 'active' : '' ?>"><a
						href="<?php echo base_url('index.php/awal/showkategori/Ruang%20Tamu') ?>">Ruang Tamu</a></li>
				<li class="<?php echo $this->uri->segment(3) == 'Ruang%20Keluarga' ? 'active' : '' ?>"><a
						href="<?php echo base_url('index.php/awal/showkategori/Ruang%20Keluarga') ?>">Ruang Keluarga</a>
				</li>
				<li class="<?php echo $this->uri->segment(3) == 'Kamar%20Tidur' ? 'active' : '' ?>"><a
						href="<?php echo base_url('index.php/awal/showkategori/Kamar%20Tidur') ?>">Kamar Tidur</a></li>
				<li class="<?php echo $this->uri->segment(3) == 'Dapur' ? 'active' : '' ?>"><a
						href="<?php echo base_url('index.php/awal/showkategori/Dapur') ?>">Dapur</a></li>
				<li class="<?php echo $this->uri->segment(3) == 'Lain%20lain' ? 'active' : '' ?>"><a
						href="<?php echo base_url('index.php/awal/showkategori/Lain%20lain') ?>">Lain lain</a></li>
				<li class=""><a href="<?php echo base_url('index.php/awal/allproduk') ?>">All Produk</a></li>

			</ul>
			<!-- /NAV -->
		</div>
		<!-- /responsive-nav -->
	</div>
	<!-- /container -->
</nav>
<!-- /NAVIGATION -->
