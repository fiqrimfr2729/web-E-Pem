        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
                    <h2>TESTIMONI</h2> 
						
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

         
        <!--================About Area =================-->
        <section class="about_area p_120">
        <div class="container">
        
        
        <table id="tabel-data" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="60px">NO</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($testimoni as $data_testimoni) : ?>
                <tr class="tr-shadow">
                    <td>
                        <?php echo $i;
                        $i++; ?>
                    </td>

                    <td>
                        <?php $originalDate = $data_testimoni->tanggal;
                        $newDate = date("d-m-Y", strtotime($originalDate));
                        echo $newDate; ?>
                    </td>
                    <td>
                        <div>
                            <a href="<?php echo base_url('upload/testimoni/' . $data_testimoni->gambar) ?>" class="btn btn-outline-secondary image-popup-vertical-fit">Lihat Gambar</a>
                        </div>
                    </td>

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table> <br>

        </div>
        </section>