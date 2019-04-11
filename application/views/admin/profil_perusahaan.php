<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profil Perusahaan</title>
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
        width: 900px;
        margin: 30px auto 0;
        border-radius: 16px;
        min-height: 256px;
        overflow: hidden;
    }

    div.kepala {
        background: #0984e3;
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

    .button input{
        margin-left:740px;
        color:white;
        background:blue;
        width: 120px;
        height: 40px;

    }

    .button input:hover{
        background:red;
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
                    <label for="nama">Nama Perusahaan   :</label>
                    <label for="nama">PT JATI MAKMUR MANDIRI (JMM) MEBEL</label>

                </div>
                <div class="grup">
                    <label for="alamat">Alamat Perusahaan   :</label>
                    <input type="text" placeholder="Masukkan Alamat">
                </div>
                <div class="grup">
                    <label for="kontak">Kontak Person   :</label>
                    <input type="text" placeholder="Masukkan No Kontak">
                </div>
                <div class="grup">
                    <label for="about">About Us   :</label>
                    <textarea type="text" placeholder="   Masukkan Tentang Kami"></textarea>
                </div><br>
                <div class="button">
                    <input type="submit" value="Simpan">
                </div>
            </form>
        </div>
    </div><br><br>
</body>

</html> 