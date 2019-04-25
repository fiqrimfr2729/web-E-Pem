<div class="card">
    <div class="card-header">
        <strong class="card-title">Data Bahan Produk</strong>
        <button class="au-btn au-btn-icon au-btn--green" data-toggle="modal" data-target="#modalFormBahan">
            <i class="zmdi zmdi-plus"></i>Tambah</button>
    </div>



    <div class="card-body">
        <table id="tabel-data" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="100px">NO</th>
                    <th>NAMA BAHAN</th>
                    <th> STATUS </th>
                    <th width="200px">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($bahan as $data_bahan) : ?>
                    <tr>
                        <td><?php echo $i;
                            $i++; ?>
                        </td>

                        <td> <?php echo $data_bahan->nama_bahan; ?> </td>
                        <td>
                            <?php if ($data_bahan->status_bahan == false) : ?>

                                <button onclick="updateConfirm('<?php echo site_url('admin/bahan_produk/update/' . $data_bahan->id_bahan) ?>')" id="btnStatus" type="button" class="btn btnStatusNonAktif"><span id="txtStatus">Tidak Tersedia</span></i></button>

                            <?php else : ?>

                                <button onclick="updateConfirm('<?php echo site_url('admin/bahan_produk/update/' . $data_bahan->id_bahan) ?>')" id="btnStatus" type="button" class="btn btnStatusAktif"><span id="txtStatus">Tersedia</span></button>

                            <?php endif; ?>
                        </td>
                        <td>
                            <button onclick="deleteConfirm('<?php echo site_url('admin/bahan_produk/delete/' . $data_bahan->id_bahan) ?>')" type="button" class="btn btn-danger" onclick="">Hapus</button>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table> <br>
    </div>
</div>