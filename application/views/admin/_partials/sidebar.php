<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <img style="margin-top:20px; width:200px; height:200px; margin-left:10px;" src="<?php echo base_url('img/Epem.png') ?>" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="<?php echo site_url('admin/dashboard') ?>">
                        </i>Dashboard
                    </a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        </i>Produk
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?php echo site_url('admin/produk_bangunan') ?>">
                                </i>Bangunan</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/produk_mebel') ?>">
                                </i>Mebel</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/produk_bedug') ?>">
                                </i>Bedug</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        </i>Kategori
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?php echo site_url('admin/kategori-bangunan') ?>">
                                </i>Bangunan</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/kategori-mebel') ?>">
                                </i>Mebel</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo site_url('admin/cara-pesan') ?>">
                        </i>Cara Pesan</a>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        </i>Pesanan
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?php echo site_url('admin/pesanan') ?>">
                                </i>Produk</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/costum') ?>">
                                </i>Costum</a>
                        </li>
                    </ul>

                <li>
                    <a href="<?php echo site_url('admin/profil') ?>">
                        </i>Tentang</a>
                </li>

                <li>
                    <a href="<?php echo site_url('admin/testimoni') ?>">
                        </i>Testimoni</a>
                </li>

                <li>
                    <a href="<?php echo site_url('admin/bahan_produk') ?>">
                        Bahan Produk</a>
                </li>


                </li>

            </ul>
        </nav>
    </div>
</aside>