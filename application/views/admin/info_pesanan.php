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
        <h5 class="pb-2 display-5">Status pesanan : </h5>
        <?php echo $pesanan->status ?>

    </div>
</div>