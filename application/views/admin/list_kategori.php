<div class="card">
    <div class="card-header">
        <strong class="card-title">Data Kategori </strong>
        <button class="au-btn au-btn-icon au-btn--green" data-toggle="modal" data-target="#modalFormKategori">
            <i class="zmdi zmdi-plus"></i>Tambah</button>
    </div>



    <div class="card-body">
        <table id="tabel-data" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="60px">NO</th>
                    <th>NAMA KATEGORI</th>
                    <th>JUMLAH PRODUK</th>
                    <th width="200px">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($kategori as $data_kategori) : ?>
                    <tr class="tr-shadow">
                        <td>
                            <?php echo $i;
                            $i++; ?>
                        </td>
                        <td>
                            <?php echo $data_kategori->nama_kategori ?>
                        </td>
                        <td>
<<<<<<< HEAD
                            <?php echo $this->db->get_where("produk", ["kategori" => $data_kategori->id_kategori])->num_rows() ?>
                        </td>
                        <td>
                            <div>
                                <button onclick="deleteConfirmKategori('<?php echo site_url('admin/kategori/delete/' . $data_kategori->id_kategori . '/' . $title_dashboard) ?>', '<?php echo $data_kategori->nama_kategori ?>')" class="btn btn-danger" type="button" title="Delete">
=======
                            <div>
                                <button onclick="deleteConfirm('<?php echo site_url('admin/kategori/delete/' . $data_kategori->id_kategori . '/' . $title_dashboard) ?>')" class="btn btn-danger" type="button" title="Delete">
>>>>>>> 6633c55dd769b3f14203dc0ac966282efa8ebfd4
                                    Hapus
                                </button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table> <br>
    </div>
</div>