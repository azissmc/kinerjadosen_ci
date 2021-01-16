<!-- Mobile Menu -->
<div class="mobile-nav-wrapper">
    <div class="mobile-menu-inner">
        <ul class="mobile-menu">
            <li><a href="<?= base_url()?>home">Home</a></li>
            <li class="has-sub"><a href="#">Dosen <i class="sub-icon fa fa-angle-down"></i></a>
                <ul class="sub-menu">
                <li><a href="<?= base_url()?>informasi">Informasi</a></li>
                <li><a href="#">Penilaian</a></li>
                <li><a href="<?= base_url()?>daftar-dosen">Daftar Dosen</a></li>
                </ul>
            </li>
            <li ><a href="<?= base_url()?>anggota">Anggota</a></li>
            <li ><a href="<?= base_url()?>blog">Berita</a></li>
            <li ><a href="<?= base_url()?>about">About</a></li>
            <li><a href="<?= base_url()?>kontak">Kontak</a></li>
        </ul>
    </div>
</div>
<div class="mobile-menu-overlay"></div>

<!-- Header -->
<header class="site-header fixed-header">
    <div class="container expanded">
        <div class="header-wrap">
            <div class="fixed-header-logo">
                <a href="<?= base_url()?>home"><img src="<?= base_url()?>assets/gambar/logofooter.png" alt=""></a>
            </div>
            <div class="is-fixed-header-logo">
                <a href="<?= base_url()?>home"><img src="<?= base_url()?>assets/gambar/logoheader.png" alt=""></a>
            </div>
            <div class="header-nav">
                <ul class="main-menu">
                    <li><a href="<?= base_url()?>home">Beranda</a></li>
                    <li class="menu-item-has-children"><a href="#">Dosen</a>
                    <ul class="sub-menu">
                        <li><a href="<?= base_url()?>informasi">Informasi</a></li>
                        <li><a href="#">Penilaian</a></li>
                        <li><a href="<?= base_url()?>daftar-dosen">Daftar Dosen</a></li>
                    </ul>
                    </li>
                    <li><a href="<?= base_url()?>anggota">Anggota</a></li>
                    <li><a href="<?= base_url()?>blog">Berita</a></li>
                    <li><a href="<?= base_url()?>about">About</a></li>
                    <li><a href="<?= base_url()?>kontak">Kontak</a></li>
                </ul>    
            </div>
            
            <div class="header-widgets">
                <ul class="right-menu">
                    <li>
                        <div class="main-pink-button">
                            <a href="<?= base_url()?>pilih-login">Masuk</a>
                        </div>
                    </li>
                    <li class="menu-item menu-mobile-nav">
                        <a href="#" class="menu-bar" id="menu-show-mobile-nav">
                            <span class="hamburger"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Header -->