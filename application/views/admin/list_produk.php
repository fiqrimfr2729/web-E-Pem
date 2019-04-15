<div class="card">
    <div class="card-header">
        <strong class="card-title">Data Produk</strong>
        <button class="au-btn au-btn-icon au-btn--green" data-toggle="modal" data-target="#modalFormProduk">
            <i class="zmdi zmdi-plus"></i>Tambah</button>
    </div>

    <div class="card-body">
        <table id="tabel-data" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="60px">NO</th>
                    <th>NAMA</th>
                    <th>KATEGORI</th>
                    <th>GAMBAR</th>
                    <th width="120px">AKSI</th>
                </tr>
            </thead>
            <tbody>

                <?php $i = 1;
                foreach ($produk as $data_produk) : ?>
                <tr class="tr-shadow">
                    <td><?php echo $i;
                        $i++; ?></td>
                    <td> <?php echo $data_produk->nama_produk ?> </td>
                    <td> <?php echo $data_produk->kategori->nama_kategori ?> </td>
                    <td>
                        <div><img width="100px" src="<?php echo base_url('upload/produk/' . $data_produk->gambar . '/thumbnail/' . $data_produk->gambar . '.png') ?>"> </div>
                    </td>
                    <td>
                        <div>
                            <button onclick="deleteConfirm('<?php echo site_url('admin/' . strtolower(str_replace(' ', '_', $title_dashboard)) . '/hapusProduk/' . $data_produk->id_produk) ?>')" class="btn btn-danger" type="button" title="Delete">
                                Hapus
                            </button>
                            <button type="button" class="btn btn-info">Info</button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table> <br>
    </div>
</div> 