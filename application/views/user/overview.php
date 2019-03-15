<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php $this->load->view('User/_partials/head.php') ?>

<body>
    <div class="header_area">
    
        <!-- MENU SIDEBAR-->
        <?php $this->load->view('User/_partials/navbar.php') ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="home_banner_area">

            <!-- HEADER DESKTOP-->
            <?php $this->load->view('User/_partials/section.php') ?>
            <!-- HEADER DESKTOP-->

            <!-- BREADCRUMB -->
            <!--<section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div>
                                        <h2 class="title-1" id="judul"><?php echo $title_PTJatiMakmurMandiri ?></h2>
                                    </div>
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->

            


            <!-- MAIN CONTENT-->
            <!--<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <?php $this->load->view($main_content) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    <?php $this->load->view('User/_partials/footer.php') ?>

</body>

</html>
<!-- end document--> 