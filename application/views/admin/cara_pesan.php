<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cara Pemesanan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">


    <script src="main.js"></script>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: sans-serif;

    }

    body {
        background: #c0c0c0;
    }

    div.konten {
        background: #ffffff;
        width: 1100px;
        height: 565px;
        margin: 30px auto 0;
        border-radius: 16px;
        overflow: hidden;
    }

    div.kepala {
        background: #2980b9;
        padding: 10px 22px;
        height: 60px;
    }

    div.kepala h2.judul {
        color: #fff;
        font-weight: normal;
        line-height: 40px;
        display: inline-block;
    }

    textarea {
        color: black;
        border: 1px solid #b2bec3;
        width: 900px;
        height: 300px;
        margin: 35px;
    }

    p {
        margin-top: 35px;
        margin-left: 33px;
    }


    .button input {
        margin-left: 830px;
        color: white;
        background: #2980b9;
        width: 270px;
        height: 35px;

    }

    .button input:hover {
        background: #74b9ff;
    }

    textarea{
        width: 700px;
        height: 300px;
    }

</style>

<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Cara Pesan</h2>
        </div>
        <div class="artikel">

            <form action="" method="post">
                <p>Silahkan input cara pesan produk anda :</p>
                <p><?php echo $profil['0']->caraPesan ?></p>

                <!-- Modal -->

                <div class="modal fade" id="modalFormCarapesan" tabindex="-1" role="form" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Data Cara Pesan Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url('admin/cara_pesan/update') ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="Cara_pesan">Cara Pesan</label>
                                        <span id="pesan" class="error"></span></p>
                                        <!--<input type="text" class="form-control txtOnly" id="cara_pesan" name="cara_pesan" placeholder="Masukkan Cara Pesan terbaru" oninvalid="this.setCustomValidity('Form tidak boleh kosong!')" required />
                                        -->
                                       
                                    </div>
                                    <textarea id="cara_pesan" name="cara_pesan" cols="4" rows="20" placeholder="<?= $profil['0']->caraPesan ?>"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>
    </div>
    </div>
    <!-- modal terakhir -->
    <div class="card-header"><br>
        <button class="au-btn au-btn-icon au-btn--green" data-toggle="modal" data-target="#modalFormCarapesan">
            <i class="zmdi zmdi-plus"></i>Ubah</button>
    </div><br><br>
    </form>

    <?= $this->session->flashdata('message'); ?>

    </div><br><br>
</body>

</html>