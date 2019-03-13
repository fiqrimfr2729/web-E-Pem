<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php $this->load->view('admin/_partials/head.php') ?>


<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php $this->load->view('admin/_partials/head_mobile.php') ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <!-- <?php $this->load->view('admin/_partials/sidebar.php') ?> -->
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- HEADER DESKTOP-->
            
                <!-- <?php $this->load->view('admin/_partials/navbar.php') ?> -->
            
            <!-- HEADER DESKTOP-->


            <!-- BREADCRUMB -->
            <!-- <?php $this->load->view('admin/_partials/breadcrumb.php') ?> -->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <?php $this->load->view('admin/_partials/list_produk.php') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- <?php $this->load->view('admin/_partials/footer.php') ?> -->

</body>

</html>
<!-- end document--> 