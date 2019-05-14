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
        width: 1000px;
        margin: 30px auto 0;
        border-radius: 16px;
        min-height: 300px;
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
        border: 1px solid #b2bec3;
        width: 840px;
        height: 200px;
    }

    .button input {
        margin-left: 820px;
        color: white;
        background: #2980b9;
        width: 100px;
        height: 40px;

    }

    .button input:hover {
        background: #74b9ff;
    }
</style>

<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Tentang</h2>
        </div>
        <div class="artikel">
            <form action="<?php echo base_url() . 'admin/tentang/tambah_aksi'; ?>" method="post">
                <div class="grup">
                    <label for="nama">Nama Perusahaan :</label>
                    <label for="nama">PT JATI MAKMUR MANDIRI (JMM)</label>

                </div>
                <div class="grup">
                    <label for="alamat">Alamat Perusahaan : <?php echo $result->alamat ?></label>
                    <input type="text" placeholder="Masukkan Alamat" name="alamat">
                </div>
                <div class="grup">
                    <label for="kontak">Kontak Person : <?php echo $result->kontak ?></label>
                    <input type="text" placeholder="Masukkan No Kontak" name="kontak">
                </div>
                <div class="grup">
                    <label for="isi_">Tentang : <?php echo $result->isi ?></label><br>
                    <textarea type="text" placeholder="   Masukkan Tentang Kami" name="isi"></textarea>
                </div><br><br>
                <div class="button">
                    <input type="submit" value="Simpan" name="Simpan">
                </div><br>

            </form>

        </div>
    </div><br><br>


</body>

</html>