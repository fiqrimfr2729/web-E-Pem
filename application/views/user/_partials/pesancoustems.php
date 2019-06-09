<!--================Home Banner Area =================-->
<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
          <div class="container">
              <div class="banner_content text-center">
                  <h2>PESAN COUSTEMS</h2>
                  <!--<div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="contact.html">Galery</a>
                        </div>-->
              </div>
          </div>
      </div>
</section>
  <!--================End Home Banner Area =================-->

<section class="contact_area p_120">
    <div class="container">

    <h3 style="text-align:center;">FORM PEMESANAN COUSTEMS</h3><br><br>

          <div class="grup">
                  <label>Nama Pemesan : </label>
                  <input type="text" placeholder="Masukan Nama Lengkap" name="nama_pemesan" class="form-control" />
              </div><br>

              
              <div class="grup">
                  <label>Pilih Kota : </label>
                  <select class="form-control">
                      <?php

                        foreach ($kota as $row2) {
                            echo '<option  name="nama_kota" value="' . $row2->nama_kabkota . '">' . $row2->nama_kabkota . '</option>';
                        }
                        ?>
                  </select>
              </div><br>

              <div class="grup">
                  <label>Pilih Provinsi : </label>
                  <select class="form-control" >
                      <?php
                            
                        foreach ($profinsi as $row3) {
                            echo '<option  name="nama_provinsi" value="' . $row3->nama_propinsi . '">' . $row3->nama_propinsi . '</option>';
                        }
                        ?>
                  </select>
              </div><br>

              <div class="grup">
                  <label>Tanggal : </label>
                  <input type="date" value="<?php echo date('y-m-d'); ?>" name="tanggal" class="form-control" />
              </div><br>

              <div class="grup">
                  <label>kontak : </label>
                  <input type="tel" placeholder="Masukan No.Telp" name="kontak" class="form-control" />
              </div><br>

              <div class="grup">
                  <label>Alamat : </label>
                  <input type="text" placeholder="Masukan Alamat" name="alamat" class="form-control" />
              </div><br>

              <div class="grup">
                  <label>Pilih File : </label><br>
                  <button  type="submit">Choose File</button> No file chooses
                  </div><br>



              <div><br>
                  <button class="btn btn-primary" type="submit">Pesan</button>
              </div>

          </form>

    </div>
</section>
