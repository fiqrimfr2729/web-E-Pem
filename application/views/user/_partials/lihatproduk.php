<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2><?php echo $title_dashboard ?> </h2>
                <!--<div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="contact.html">Galery</a>
                        </div>-->
            </div>
        </div>
    </div>
</section>

<!--================Contact Area =================-->
<section class="furniture_area p_120">
    <p style="font-size: 200%;"><?= $coba ?> </p>
    <br>
    <img height="200px" src="<?php echo base_url('upload/produk/' . $data_produk->gambar . '/thumbnail/' . $data_produk->gambar . '.png') ?>" alt="">
    <h4 class="pb-2 display-5">Deskripsi : </h4>
    <?php echo $data_produk->deskripsi ?>
    <hr width="100%" size="2px" color="black">

    <form method="post" action="<?php echo site_url('user/pesansekarang') ?>">
        <input type="hidden" name="id_produk" value="<?php echo $data_produk->id_produk ?>">
        <button type="submit" class="banner_btn">Pesan</button>
    </form>

</section>
