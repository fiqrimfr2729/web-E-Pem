<div class="card">
    <div class="card-header">
        <strong class="card-title">Data Testimoni</strong>
        <button class="au-btn au-btn-icon au-btn--green" data-toggle="modal" data-target="#modalTestimoni">
            <i class="zmdi zmdi-plus"></i>Tambah</button>
    </div>



    <div class="card-body">
        <table id="tabel-data" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="60px">NO</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th width="200px">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($testimoni as $data_testimoni) : ?>
                <tr class="tr-shadow">
                    <td>
                        <?php echo $i;
                        $i++; ?>
                    </td>

                    <td>
                        <?php $originalDate = $data_testimoni->tanggal;
                        $newDate = date("d-m-Y", strtotime($originalDate));
                        echo $newDate; ?>
                    </td>
                    <td>
                        <div>
                            <a href="<?php echo base_url('upload/testimoni/' . $data_testimoni->gambar) ?>" class="btn btn-outline-secondary image-popup-vertical-fit">Lihat Gambar</a>
                        </div>
                    </td>

                    <td>
                        <button onclick="deleteConfirm('<?php echo site_url('admin/testimoni/deleteTestimoni/' . $data_testimoni->id_testimoni . '/' . $title_dashboard) ?>')" class="btn btn-danger" type="button" title="Delete">
                            Hapus
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table> <br>
    </div>
</div> 