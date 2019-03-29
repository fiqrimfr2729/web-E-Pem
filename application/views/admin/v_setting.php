<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Setting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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

    div.artikel div.grup label,
    div.artikel div.grup input {
        display: block;
    }

    div.artikel div.grup label {
        font-size: 16px;
        margin-bottom: 10px;
    }

    div.artikel div.grup input[type="text"] {
        width: 100%;
        height: 35px;
        padding: 0 15px;
        border: none;
        color: black;
        border: 1px solid #b2bec3;
    }

    div.artikel div.grup input[type="submit"] {
        background: #33cd77;
        padding: 4px 16px;
        margin: 0 auto;
        border: 1px solid #33cd77;
        border-radius: 2px;
        color: #fff;
        cursor: pointer;
        margin-left: 750px;

    }

    div.artikel div.grup input[type="submit"]:hover {
        background: #ff6348;
    }
</style>

<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Setting</h2>
        </div>
        <div class="artikel">
            <div class="grup">
                <a href="#"><i class="fas fa-user-plus"></i> Tambah Akun</a><br>
            </div>
            <div class="grup">
                <a href="#"><i class="fas fa-user-edit"></i> Edit Akun</a><br>
            </div>
            <div class="grup">

            </div>
        </div>
    </div><br><br>
</body>

</html> 