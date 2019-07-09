
		<!-- HEADER -->
		<header>
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
								<!-- Wishlist -->
								<div>
									<a href="<?php echo base_url('index.php/awal/registrasi') ?>">
										<i class="fa fa-user-plus"></i>
										<span>Register</span>
									</a>
								</div>
								<!-- /Wishlist -->
								
								<!-- Wishlist -->
								<div>
									<a href="<?php echo base_url('index.php/awal/login') ?>">
										<i class="fa fa-sign-in"></i>
										<span>Login</span>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
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
						<li class="<?php echo $this->uri->segment(3) == '' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>">Home</a></li>
						<li class="<?php echo $this->uri->segment(3) == 'Ruang%20Tamu' ? 'active' : '' ?>"><a href="<?php echo base_url('index.php/awal/showkategori/Ruang%20Tamu') ?>">Ruang Tamu</a></li>
						<li class="<?php echo $this->uri->segment(3) == 'Ruang%20Keluarga' ? 'active' : '' ?>"><a href="<?php echo base_url('index.php/awal/showkategori/Ruang%20Keluarga') ?>">Ruang Keluarga</a></li>
						<li class="<?php echo $this->uri->segment(3) == 'Kamar%20Tidur' ? 'active' : '' ?>"><a href="<?php echo base_url('index.php/awal/showkategori/Kamar%20Tidur') ?>">Kamar Tidur</a></li>
						<li class="<?php echo $this->uri->segment(3) == 'Dapur' ? 'active' : '' ?>"><a href="<?php echo base_url('index.php/awal/showkategori/Dapur') ?>">Dapur</a></li>
						<li class="<?php echo $this->uri->segment(3) == 'Lain%20lain' ? 'active' : '' ?>"><a href="<?php echo base_url('index.php/awal/showkategori/Lain%20lain') ?>">Lain lain</a></li>
						<li class=""><a href="<?php echo base_url('index.php/awal/allproduk') ?>">All Produk</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
