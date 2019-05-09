    
    
    
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
        <!--================End Home Banner Area =================-->
       
        <!--================Contact Area =================-->
<section class="furniture_area p_120">
    
<?php $this->load->view('layout/top_menu') ?>
		
		<!-- Tampilkan semua produk -->
		<div class="row">
		<!-- looping products -->
		  <?php foreach($products as $product) : ?>
		  <div class="col-sm-3 col-md-3">
			<div class="thumbnail">
			  <?=img([
				'src'		=> 'uploads/' . $product->image,
				'style'		=> 'max-width: 100%; max-height:100%; height:100px'
			  ])?>
			  <div class="caption">
				<h3 style="min-height:60px;"><?=$product->name?></h3>
				<p><?=$product->description?></p>
				<p>Rp. <?=$product->price?></p>
				<p>
					<?=anchor('welcome/add_to_cart/' . $product->id, 'Buy' , [
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
        
