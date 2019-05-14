
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>BAHAN PRODUK</h2>
					</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
    <section class="furniture_area p_120">

        <div style="margin-left:180px;">
            <h4>Keterangan  :</h4>
            Status 0 (nol) itu menandakan bahwa Bahan Produk TIDAK TERSEDIA<br>
            Status 1 (satu) itu menandakan bahwa Bahan Produk TERSEDIA
        </div><br><br><br>

        <div class="container">
            <table id="tabel-data" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="30px">NO</th>
                    <th>NAMA BAHAN</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                   
                <?php $i = 1;
                foreach ($bahan as $data) : ?>
                    <tr class="tr-shadow">
                        <td>
                            <?php echo $i;
                            $i++ ?>
                        </td>
                        <td>
                            <?php echo $data->nama_bahan ?>
                        </td>
                        <td>
                            <?php echo $data->status_bahan ?>
                        </td>
                      
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table> <br>
        </div>
    </section>

        