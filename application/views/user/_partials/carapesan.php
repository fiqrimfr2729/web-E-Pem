  <!--================Home Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
          <div class="container">
              <div class="banner_content text-center">
                  <h2>CARA PEMESANAN</h2>
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
        color: grey;
        border: 1px solid white;
        font-size:17px;
        padding:100px;
        margin-top:-50px;

   }

  </style>
  <!--================Contact Area =================-->
  <section class="contact_area p_120">
            <form action="" method="post">
                
                <textarea cols="70" rows="20"><?php echo $profil['0']->caraPesan ?></textarea>
            </form>    
  </section>