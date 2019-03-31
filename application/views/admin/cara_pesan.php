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
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    
}
 
body{
    background: #c0c0c0;
}
 
div.konten{
    background: #ffffff;
    width: 900px;
    margin: 30px auto 0;
    border-radius: 16px;
    min-height: 256px;
    overflow: hidden;
}
 
div.kepala{
    background: #0984e3;
    padding: 10px 22px;
    height: 60px;
}
 
div.kepala h2.judul{
    color: #fff;
    font-weight: normal;
    line-height: 40px;
    display: inline-block;
}

textarea{
    color:black;
    border: 1px solid #b2bec3;
    width: 830px;
    height: 400px;
    margin:35px;
}

p{
    margin-top:35px;
    margin-left:33px;
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
            <h2 class="judul">Cara Pesan</h2>
        </div>
        <div class="artikel">
            <form action="" method="post">
            <p>Silahkan input cara pesan produk furniture anda :</p>
              <textarea name="text" id="ad" placeholder="  Masukkan cara pemesanan produk"></textarea>
              <div class="button">
                    <input type="submit" value="Simpan">
                </div><br><br>
            </form>
        </div>
    </div><br><br>
</body>
</html>