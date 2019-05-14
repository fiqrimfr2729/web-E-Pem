<!--================Home Banner Area =================-->
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>TENTANG </h2>
						<!--<div class="page_link">
							<a href="index.html">Home</a>
							<a href="contact.html">Contact</a>
						</div>-->
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
    <style>
    form{
        margin-left:100px;
        font-size:18px;
        color:black;
    }
      
    textarea {
        border: 1px solid white;
        width: 1000px;
        height: 100px;
       
    }

    
    .button{
        width: 1300px;
        height: 40px;
        border: 1px solid white;
        color:black;
   
    }

   

</style>
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            
        <form action="" method="post">
                 
                 <div class="grup">
                     <label for="nama">Nama Perusahaan   : </label>
                     <input class="button" type="text" placeholder=" <?php echo $profil['0']->nama ?> " name="nama"/>
                 </div><br>
                 <div class="grup">
                     <label for="alamat">Alamat Perusahaan   :</label>
                     <input class="button" type="text" placeholder=" <?php echo $profil['0']->alamat ?> "  name="alamat"/>
                 </div><br>
                 <div class="grup">
                     <label for="kontak">Kontak Person   : </label>
                     <input class="button" type="text" placeholder=" <?php echo $profil['0']->no_kontak ?> "  name="no_kontak"/>
                </div><br>
                 <div class="grup">
                     <label for="isi_">Tentang   :  </label><br>
                     <textarea type="text" placeholder=" <?php echo $profil['0']->tentang ?> "  name="tentang"></textarea>                </div><br><br>
        </form>

 
        </section>