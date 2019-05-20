		
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
       
		<!-- Tampilkan semua produk -->
		<div class="row">
		<!-- looping products -->
		  <?php foreach($produk as $produk) : ?>
		  <div class="col-sm-3 col-md-3">
			<div class="thumbnail">
			  <?=img([
				'src'		=> 'uploads/' . $produk->gambar,
				'style'		=> 'max-width: 100%; max-height:100%; height:100px'
			  ])?>
			  <div class="caption">
				<h3 style="min-height:60px;"><?=$produk->nama_produk?></h3>
				<p><?=$produk->deskripsi?></p>
				<p>
					<?=anchor('Mebel/add_to_cart/' . $produk->id_produk, 'Buy' , [
						'class'	=> 'btn btn-primary',
						'role'	=> 'button'
					])?>
				</p>
			  </div>
			</div>
		  </div>
		  <?php endforeach; ?>
		<!-- end looping -->
		</div>
    </section>
        
