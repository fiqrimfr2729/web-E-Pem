
	   
	  <section class="furniture_area p_120">
      <div class="container">
        <div class="main_title">
        	<h2>PRODUK UNGGULAN</h2>
        		<p>Dibawah ini adalah produk-produk unggulan dari perusahaan kami yang akhir-akhir ini banyak diminati dan dipesan oleh konsumen dari berbagai kota diluar majalengka khususnya.</p>
        </div>        	
        		      

    <!-- Tampilkan semua produk -->
		<div class="row" style="margin-left:40px">
		<!-- looping products -->
		  <?php foreach($produk as $produk) : ?>
		  <div class="col-sm-3 col-md-3">
			<div class="thumbnail">
			<div><img width="250px" height="200px" src="<?php echo base_url('upload/produk/' . $produk->gambar . '/thumbnail/' . $produk->gambar . '.png') ?>"> </div>
		  <br>
			  <div class="caption">
				<h4 style="min-height:30px;"><?=$produk->nama_produk?></h4>
				<p><?=$produk->deskripsi?></p>
       	<button onclick="window.location.href='<?php echo base_url('User/lihatproduk')?>'" style="width:250px; background:#f39c12; border:#f39c12" type="button" class="btn btn-success">Lihat Produk</button>
				</div><br><br><br><br>
			</div>
		  </div>
			<?php endforeach; ?>
		<!-- end looping -->
		</div>
		</div>
		
    </section>
        