  <!--================Home Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
          <div class="container">
              <div class="banner_content text-center">
                  <h2>CARA PESAN PRODUK</h2>
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
   textarea {
        color: black;
        border: 1px solid white;
        width: 900px;
        height: 300px;
        margin: 35px;
    }
  </style>
  <!--================Contact Area =================-->
  <section class="contact_area p_120">
      <div class="container">
      <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Cara Pesan</h2>
        </div>
        <div class="artikel">
        
            <form action="" method="post">
                <textarea name="text" id="ad" placeholder="<?php echo $profil['0']->caraPesan ?>"></textarea>
            </form>
        </div><br><br>
      </div>
  </section>