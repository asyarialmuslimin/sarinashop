<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/index.php/superuser') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Produk</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('index.php/superuser/addproduk') ?>">Produk Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('index.php/superuser/produk') ?>">List Produk</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('index.php/superuser/tambahuser') ?>">User Baru</a>
            <a class="dropdown-item" href="<?php echo base_url('index.php/superuser/user') ?>">List User</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/index.php/superuser/order') ?>">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Pembayaran</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/index.php/superuser/konfirmasi') ?>">
            <i class="fas fa-fw fa-check"></i>
            <span>Konfirmasi</span></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-cube"></i>
            <span>Pengiriman</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('index.php/superuser/pengiriman') ?>">Tambah Pengiriman</a>
            <a class="dropdown-item" href="<?php echo base_url('index.php/superuser/listpengiriman') ?>">List Pengiriman</a>
        </div>
    </li>
</ul>
<div id="content-wrapper">

<div class="container-fluid">