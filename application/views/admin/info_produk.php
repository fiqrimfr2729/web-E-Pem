<div class="card">
    <div class="card-header">
        <strong class="card-title">
            <h2 class="pb-2 display-5"><?php echo $data_produk->nama_produk ?></h2>
        </strong>

    </div>
</div>

<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <img height="100px" src="<?php echo base_url('upload/produk/' . $data_produk->gambar . '/thumbnail/' . $data_produk->gambar . '.png') ?>">
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <h3 class="pb-2 display-5">Kategori : <?php echo $data_produk->kategori->nama_kategori ?></h3>
                <hr width="100%" size="2px" color="black">

                <h4 class="pb-2 display-5">Deskripsi : </h4>
                <?php echo $data_produk->deskripsi ?>
                <hr width="100%" size="2px" color="black">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalFormEditProduk">Edit</button>
                <button onclick="deleteConfirm('<?php echo site_url('admin/' . strtolower(str_replace(' ', '_', $info_kategori)) . '/hapusProduk/' . $data_produk->id_produk) ?>')" class="btn btn-danger" type="button" title="Delete">Hapus </button>
            </div>
        </div>
    </div>
</div>