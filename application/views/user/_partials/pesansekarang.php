  <!--================Home Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
          <div class="container">
              <div class="banner_content text-center">
                  <h2>PESAN SEKARANG</h2>
                  <!--<div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="contact.html">Galery</a>
                        </div>-->
              </div>
          </div>
      </div>
  </section>
  <!--================End Home Banner Area =================-->

  <style>
      /*
      form {
          margin-left: 100px;
          font-size: 18px;
          color: black;

      }

      input {
          width: 1000px;
          height: 40px;
          border: 1px solid grey;
          color: black;

      }
      */
      h3 {
          text-align: center;
      }


      /* Style the form */
      #regForm {
          background-color: #ffffff;
          margin: 100px auto;
          padding: 40px;
          width: 70%;
          min-width: 300px;
          font-size: 18px;

      }

      /* Style the input fields */
      input {
          padding: 10px;
          width: 100%;
          font-size: 17px;
          font-family: Raleway;
          border: 1px solid #aaaaaa;
      }

      /* Mark input boxes that gets an error on validation: */
      input.invalid {
          background-color: #ffdddd;
      }

      /* Hide all steps by default: */
      .tab {
          display: none;
      }

      /* Make circles that indicate the steps of the form: */
      .step {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbbbbb;
          border: none;
          border-radius: 50%;
          display: inline-block;
          opacity: 0.5;
      }

      /* Mark the active step: */
      .step.active {
          opacity: 1;
      }

      /* Mark the steps that are finished and valid: */
      .step.finish {
          background-color: #4CAF50;
      }

      button{
          width:150px;
          margin-left:570px;
      }
  </style>
  <!--================Contact Area =================-->
  <section class="contact_area p_120">
      <div class="container">
          <h3>FORM PEMESANAN</h3>
          <form id="regForm" action="<?php echo site_url('user/pesansekarang/tambahPesan'); ?>" method="post">

          <div class="grup">
                  <label>Nama Pemesan : </label>
                  <input type="text" placeholder="Nama Lengkap" name="nama_pemesan" class="form-control" />
              </div><br>

              <div class="grup">
                  <label>Pilih Provinsi : </label>
                  <select class="form-control">
                      <?php

                        foreach ($profinsi as $row3) {
                            echo '<option  name="nama_provinsi" value="' . $row3->nama_propinsi . '">' . $row3->nama_propinsi . '</option>';
                        }
                        ?>
                  </select>
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
                  <label>Tanggal : </label>
                  <input type="date" value="<?php echo date('y-m-d'); ?>" name="tanggal" class="form-control" />
              </div><br>

              <div class="grup">
                  <label>kontak : </label>
                  <input type="tel" placeholder="No.Telephone" name="kontak" class="form-control" />
              </div><br>
              <div class="grup">
                  <label>Alamat : </label>
                  <input type="text" placeholder="Alamat Pembeli" name="alamat" class="form-control" />
              </div><br>

              <div><br>
                  <button class="btn btn-primary" type="submit">Pesan</button>
              </div>

          </form>
      </div>
  </section>