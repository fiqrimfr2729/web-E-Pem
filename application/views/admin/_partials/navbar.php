<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search" />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="<?php echo base_url('images/icon/avatar-01.jpg') ?>" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">Admin E-pem</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="<?php echo base_url('images/icon/avatar-01.jpg') ?>" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">Admin E-pem</a>
                                        </h5>
                                        <span class="#">admin@gmail.com</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <li class="has-sub">
                                            <a class="js-arrow" href="#">
                                                <i class="zmdi zmdi-account"></i>Account
                                                <span class="js-arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>

                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="<?php echo site_url('admin/kelola_akun/changePwd') ?>">
                                                        <i class="fas fa-key"></i>Change Password</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <li class="has-sub">
                                            <a class="js-arrow" href="#">
                                                <i class="fas fa-cog"></i>Pengaturan
                                                <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="<?php echo site_url('admin/kelola_akun') ?>">
                                                        <i class="fas fa-user-plus"></i>Kelola Akun</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--<div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>-->
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="<?= base_url('auth/logout'); ?>">
                                            <i class="zmdi zmdi-power"></i>Keluar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>