     <!--================Home Banner Area =================-->
     <section class="banner_area">
       <div class="banner_inner d-flex align-items-center">
         <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
         <div class="container">
           <div class="banner_content text-center">
             <h2>PRODUK BANGUNAN</h2>
             <!--<div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="contact.html">Galery</a>
                        </div>-->
           </div>
         </div>
       </div>
     </section>
     <!--================End Home Banner Area =================-->

     <!--================Contact Area =================-->
     <section class="furniture_area p_120">

       <div>
         <!-- Tampilkan semua produk -->
         <div class="row" style="margin-left:25px">
           <!-- looping products -->
           <?php foreach ($produk as $produk) : ?>
             <div class="col-sm-3 col-md-3">
               <div class="thumbnail">
                 <div><img width="250px" height="200px" src="<?php echo base_url('upload/produk/' . $produk->gambar . '/thumbnail/' . $produk->gambar . '.png') ?>"> </div>
                 <br>
                 <div class="caption">
                   <h4 style="min-height:30px;"><?= $produk->nama_produk ?></h4>
                   <p><?= $produk->kategori ?></p>
                   <button onclick="<?php echo base_url('user/lihatproduk') ?>" style="width:250px; background:#f39c12; border:#f39c12" type="button" class="btn btn-success">Lihat Produk</button>
                 </div><br><br><br>
               </div>
             </div>
           <?php endforeach; ?>
           <!-- end looping -->
         </div>
       </div>


     </section>