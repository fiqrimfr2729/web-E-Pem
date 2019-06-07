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
        height: 700px;
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
        width: 700px;
        height: 500px;
    }


        .button input:hover {
            background: #74b9ff;
        }

        .button {
            width: 1300px;
            height: 40px;
            color: black;
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
                    <div class="card-header">
                        <button class="au-btn au-btn-icon au-btn--green" data-toggle="modal" data-target="#modalFormCarapesan">
                            <i class="zmdi zmdi-plus"></i>Edit</button>
                    </div>

            </form>

        </div>
    </div>

</body>

</html>