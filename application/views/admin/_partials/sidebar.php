<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <img src="<?php echo base_url('images/icon/logo-white.png') ?>" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="<?php echo site_url('admin/dashboard') ?>">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/produk') ?>">
                        <i class="fas fa-chart-bar"></i>Produk</a>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-trophy"></i>Kategori
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?php echo site_url('admin/kategori-kusen') ?>">
                                <i class="fas fa-table"></i>Kusen</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/kategori-mebel') ?>">
                                <i class="far fa-check-square"></i>Mebel</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo site_url('admin/cara-pesan') ?>">
                        <i class="fas fa-chart-bar"></i>Cara Pemesanan</a>
                </li>

                <li>
                    <a href="<?php echo site_url('admin/pesanan') ?>">
                        <i class="fas fa-shopping-basket"></i>Pesanan</a>
                </li>

                <li>
                    <a href="<?php echo site_url('admin/profil') ?>">
                        <i class="fas fa-chart-bar"></i>Profil Perusahaan</a>
                </li>

                <li>
                    <a href="<?php echo site_url('admin/testimoni') ?>">
                        <i class="fas fa-chart-bar"></i>Testimoni</a>
                </li>

                <li>
                    <a href="<?php echo site_url('admin/bahan_produk') ?>">
                        <i class="fas fa-chart-bar"></i>Bahan Produk</a>
                </li>

            </ul>
        </nav>
    </div>
</aside> 