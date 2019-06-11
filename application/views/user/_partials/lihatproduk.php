        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>PRODUK MEBEL</h2>
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
       
  
                <h3 class="pb-2 display-5">Kategori : <?php echo $produk->kategori->nama_kategori ?></h3>
                <hr width="100%" size="2px" color="black">

                <h4 class="pb-2 display-5">Deskripsi : </h4>
                <?php echo $produk->deskripsi ?>
                <hr width="100%" size="2px" color="black">
                
            <button style="width:200px; background:#f39c12; border:#f39c12" type="button" class="btn btn-info"  onclick="<?php echo base_url('') ?>">WhatsApp</button>
            <button style="width:250px; background:#d35400; border:#d35400" type="button" class="btn btn-info"  onclick="<?php echo base_url('') ?>">Pesan Sekarang</button>
           
        </section>