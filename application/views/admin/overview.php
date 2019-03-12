<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->

        <?php $this->load->view('admin/_partials/sidebar.php') ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <?php $this->load->view('admin/_partials/navbar.php') ?>
            </header>
            <!-- HEADER DESKTOP-->


            <!-- BREADCRUMB -->
            <?php $this->load->view('admin/_partials/breadcrumb.php') ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <?php $this->load->view('admin/_partials/list_kategori.php') ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <footer>
        <div class="copyright">
            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
        </div>
    </footer>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/data-table/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/data-table/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/data-table/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/data-table/button//js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/data-table/button//js/buttons.bootstrap.min.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $('#tabel-data').DataTable();
        });
    </script>

    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('assets/bootstrap-4.1/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap-4.1/bootstrap.min.js') ?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('assets/slick/slick.min.js') ?>">
    </script>
    <script src="<?php echo base_url('assets/wow/wow.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/animsition/animsition.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>">
    </script>
    <script src="<?php echo base_url('assets/counter-up/jquery.waypoints.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/counter-up/jquery.counterup.min.js') ?>">
    </script>
    <script src="<?php echo base_url('assets/circle-progress/circle-progress.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
    <script src="<?php echo base_url('assets/chartjs/Chart.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/select2/select2.min.js') ?>"></script>
    <!-- Main JS-->
    <script src="<?php echo base_url('js/main.js') ?>"></script>

</body>

</html>
<!-- end document--> 