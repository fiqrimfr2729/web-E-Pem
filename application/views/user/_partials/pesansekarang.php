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

      button {
          width: 150px;
          margin-left: 570px;
      }
  </style>
  <!--================Contact Area =================-->
  <section class="contact_area p_120">
      <div class="container">
          <h3>FORM PEMESANAN</h3>
          <form id="regForm" action="<?php echo site_url('user/pesansekarang/tambahPesan') ?>" method="post">


              <div class="grup">
                  <label>Nama Pemesan : </label>
                  <input type="text" placeholder="  " name="nama_pemesan" class="form-control" required />
              </div><br>

              <div class="grup">
                  <label>Pilih Bahan : </label>
                  <select name="bahan" id="bahan" class="form-control" required>
                      <?php
                        echo '<option value="">PILIH BAHAN PRODUK</option>';
                        foreach ($bahan as $bahan) {
                            echo '<option  name="bahan" value="' . $bahan->id_bahan . '">' . $bahan->nama_bahan . '</option>';
                        }
                        ?>
                  </select>
              </div><br>

              <div class="grup">
                  <label>Tanggal : </label>
                  <input type="date" value="<?php echo date('y-m-d'); ?>" name="tanggal" class="form-control" required />
              </div><br>

              <div class="grup">
                  <label>kontak : </label>
                  <input type="tel" placeholder="No.Telephone" name="kontak" class="form-control" required />
              </div><br>


              <div class="grup">
                  <label>Pilih Provinsi : </label>
                  <select name="provinsi" id="provinsi" class="form-control" required>
                      <?php
                        echo '<option value="">PILIH PROVINSI</option>';
                        foreach ($provinsi as $prov) {
                            echo '<option  name="nama_kota" value="' . $prov->id_propinsi . '">' . $prov->nama_propinsi . '</option>';
                        }
                        ?>
                  </select>
              </div><br>

              <div class="grup">
                  <label>Pilih Kota : </label>
                  <select name="kota" id="kota" class="form-control" required>

                  </select>
              </div><br>

              <div id="loading" style="margin-top: 15px;">
                  <img src="<?php echo base_url('img/loading.gif'); ?>" width="18"><small>Loading...</small>
              </div>

              <div class="grup">
                  <label>Alamat : </label>
                  <input type="text" placeholder="Alamat Pembeli" name="alamat" class="form-control" required />
              </div><br>

              <div class="grup">
                  <input type="text" placeholder="" id="status" name="status" class="form-control" required />
              </div><br>

              <input type="hidden" name="id_produk" value="<?php echo $id_produk ?>" />

              <div>
                  <button class="btn btn-primary" type="submit">Pesan</button>
              </div>

          </form>

      </div>
  </section>

  <script src="<?php echo base_url("js/jquery-3.2.1.min.js"); ?>" type="text/javascript"></script>
  <script>
      $(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
          // Kita sembunyikan dulu untuk loadingnya
          $("#loading").hide();
          $("#status").hide();

          $("#provinsi").change(function() { // Ketika user mengganti atau memilih data provinsi
              $("#kota").hide(); // Sembunyikan dulu combobox kota nya
              $("#loading").show(); // Tampilkan loadingnya

              $.ajax({
                  type: "POST", // Method pengiriman data bisa dengan GET atau POST
                  url: "<?php echo base_url("user/pesansekarang/listKota"); ?>", // Isi dengan url/path file php yang dituju
                  data: {
                      id_propinsi: $("#provinsi").val()
                  }, // data yang akan dikirim ke file yang dituju
                  dataType: "json",
                  beforeSend: function(e) {
                      if (e && e.overrideMimeType) {
                          e.overrideMimeType("application/json;charset=UTF-8");
                      }
                  },
                  success: function(response) { // Ketika proses pengiriman berhasil
                      $("#loading").hide(); // Sembunyikan loadingnya
                      // set isi dari combobox kota
                      // lalu munculkan kembali combobox kotanya
                      $("#kota").html(response.list_kota).show();
                  },
                  error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                      alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                  }
              });
          });
      });
  </script>