<div class="card">
    <div class="card-header">
        <strong class="card-title">Data Kategori</strong>
        <button class="au-btn au-btn-icon au-btn--green" data-toggle="modal" data-target="#modalFormKategori">
            <i class="zmdi zmdi-plus"></i>add item</button>
    </div>



    <div class="card-body">
        <table id="tabel-data" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="150px">ID</th>
                    <th>NAMA KATEGORI</th>
                    <th width="100px">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kategori as $data_kategori) : ?>
                <tr class="tr-shadow">
                    <td>
                        <?php echo $data_kategori->id_kategori ?>
                    </td>
                    <td>
                        <?php echo $data_kategori->nama_kategori ?>
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                            <button onclick="deleteConfirm('<?php echo site_url('admin/kategori/delete/' . $data_kategori->id_kategori . '/' . $title_dashboard) ?>')" class=" item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                <i class="zmdi zmdi-more"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table> <br>
    </div>
</div> 