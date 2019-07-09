<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('index.php/dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo $this->uri->segment(2) == 'daftarpesanan' ? 'active': '' ?>" href="<?php echo base_url('index.php/dashboard/daftarpesanan') ?>">
        <i class="fas fa-list-ul"></i></i>
            <span>Daftar Pesanan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/dashboard/listkonfirmasi') ?>">
        <i class="fas fa-check"></i>
            <span>Konfirmasi Pesanan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/dashboard/listpengiriman') ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengiriman Pesanan</span></a>
    </li>
</ul>
<div id="content-wrapper">

<div class="container-fluid">