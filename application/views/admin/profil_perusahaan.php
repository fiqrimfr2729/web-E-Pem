<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tentang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<style>
    body {
        background: #c0c0c0;
    }

    div.konten {
        background: #ffffff;
        width: 1100px;
        height: 1000px;
        margin: 30px auto 0;
        border-radius: 16px;
        overflow: hidden;
    }

    div.kepala {
        background: #2980b9;
        padding: 10px 22px;
        height: 50px;
    }

    div.kepala h2.judul {
        color: #fff;
        font-weight: normal;
        line-height: 40px;
        display: inline-block;
    }

    div.lock {
        background-image: url("lock.png");
        background-position: center;
        display: inline-block;
        width: 25px;
        height: 25px;
        margin-top: 8px;
        float: left;
        margin-right: 10px;
    }

    div.artikel {
        padding: 15px 30px 0;
        color: black;
    }

    div.artikel div.grup {
        margin: 20px 0;
    }

    textarea {
        color: black;
        border: 1px solid white;
        width: 1000px;
        height: 300px;
    }


    .button input:hover {
        background: #74b9ff;
    }

    .button {
        width: 1300px;
        height: 40px;
        color: black;
    }

    .card-header {
        margin-top: -170px;
    }
</style>

<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Tentang</h2>
        </div>
        <div class="artikel">

            <form action="" method="post">

                <div class="grup">
                    <label for="nama">Nama Perusahaan : </label>
                    <input class="button" type="text" placeholder=" <?php echo $profil['0']->nama ?> " name="nama" />
                </div>
                <div class="grup">
                    <label for="alamat">Alamat Perusahaan :</label>
                    <input class="button" type="text" placeholder=" <?php echo $profil['0']->alamat ?> " name="alamat" />
                </div>
                <div class="grup">
                    <label for="kontak">Kontak Person : </label>
                    <input class="button" type="text" placeholder=" <?php echo $profil['0']->no_kontak ?> " name="no_kontak" />
                    <div class="grup">
                        <label for="isi_">Tentang : </label><br>
                        <textarea type="text" placeholder=" <?php echo $profil['0']->tentang ?> " name="tentang"></textarea> </div><br><br>
                    <<div class="card-header">
                        <div>
                            <button class="au-btn au-btn-icon au-btn--green" data-toggle="modal" data-target="#modalFormCarapesan">
                                <i class="zmdi zmdi-plus"></i>EDIT</button>
                        </div><br><br>

            </form>

        </div>
    </div>

    <div class="modal fade" id="editAkun" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Data Produk Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/' . strtolower(str_replace(' ', '_', $title_dashboard)) . '/tambahProduk') ?>" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="Nama Produk">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukkan nama produk" pattern="[a-zA-Z0-9\s\-]+" required="required" />
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" pattern="[a-zA-Z0-9\s\-]+"></textarea>
                        </div>

                        <?php if ($title_dashboard != "Produk Bedug") : ?>
                            <div class="form-group">
                                <label for="Kategori">Kategori</label>
                                <select name="kategori" id="kategori" name="kategori" class="form-control" required="required">
                                    <option value="">Pilih Kategori</option>
                                    <?php foreach ($kategori as $data_kategori) : ?>
                                        <option value="<?php echo $data_kategori->id_kategori ?>"> <?php echo $data_kategori->nama_kategori ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        <?php else : ?>
                            <div class="form-group">
                                <label for="Kategori">Kategori</label>
                                <select name="kategori" id="kategori" name="kategori" class="form-control">
                                    <option value="30" selected>Bedug</option>
                                </select>
                            </div>
                        <?php endif; ?>

                        Pilih File :
                        <div class="form-group">
                            <label for="gambar"></label>
                            <input class="form-control-file" type="file" name="gambar" required />
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Masukan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>