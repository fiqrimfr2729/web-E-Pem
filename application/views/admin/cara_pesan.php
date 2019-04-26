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
                <textarea name="text" id="ad" placeholder="<?php echo $profil['0']->caraPesan ?>"></textarea>

                <div class="card-header"><br>
                    <button class="au-btn au-btn-icon au-btn--green" data-toggle="modal" data-target="#modalFormCarapesan">
                        <i class="zmdi zmdi-plus"></i>Edit</button>
                </div><br><br>


            </form>

        </div><br><br>
</body>

</html>