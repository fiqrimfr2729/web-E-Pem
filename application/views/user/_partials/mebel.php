		
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
       
		

        
        

            <div class="card-body">
                <h4 class="pb-2 display-5">Kategori : <?php echo $data_query->kategori->nama_kategori ?> </h4>
                <hr width="100%" size="2px" color="black">

                <h4 class="pb-2 display-5">Deskripsi : </h4>
                <?php echo $data_query->Deskripsi ?>
                <hr width="100%" size="2px" color="black">
                <button type="button" class="btn btn-success" >Chat</button>
                <button onclick=" " class="btn btn-danger" type="button" >Pesan </button>
            </div>
     


    </section>
        
