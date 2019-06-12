<div class="card">
    <div class="card-body">
        <h5 class="pb-2 display-5">Nama Pemesan : </h5>
        <?php echo $pesanan->nama_pemesan ?>
        <hr width="100%" size="2px" color="black">
        <h5 class="pb-2 display-5">Tanggal : </h5>
        <?php echo $pesanan->tanggal ?>
        <hr width="100%" size="2px" color="black">
        <h5 class="pb-2 display-5">Kota : </h5>
        <?php echo ucfirst(strtolower($pesanan->kota->nama_kabkota)) ?>
        <hr width="100%" size="2px" color="black">
        <h5 class="pb-2 display-5">Alamat : </h5>
        <?php echo $pesanan->alamat ?>
        <hr width="100%" size="2px" color="black">
        <h5 class="pb-2 display-5">Nomor Kontak : </h5>
        <?php echo $pesanan->kontak ?>
        <hr width="100%" size="2px" color="black">
        <h5 class="pb-2 display-5">Bahan : </h5>
        <?php echo $pesanan->bahan->nama_bahan ?>
        <hr width="100%" size="2px" color="black">
        <h5 class="pb-2 display-5">Nama Produk : </h5>
        <?php echo $pesanan->produk->nama_produk ?>
        <div>

            <img width="250px" height="200px" src="<?php echo base_url('upload/produk/' . $pesanan->produk->gambar . '/thumbnail/' . $pesanan->produk->gambar . '.png') ?>">

        </div>
        <hr width="100%" size="2px" color="black">

        <?php $no = substr($pesanan->kontak, 1, strlen($pesanan->kontak) - 1);
        ?>
        <a class="btn btn-warning" type="button" target="_blank" href="https://web.whatsapp.com/send?phone=62 <?php echo $no ?> " title="Respon">
            Respon pesanan
        </a>

    </div>
</div>