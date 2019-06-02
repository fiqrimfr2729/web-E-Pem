<div class="card">
    <div class="card-header">
        <strong class="card-title">Data Pesanan</strong>
    </div>

    <div class="card-body">
        <table id="tabel-data" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="30px">NO</th>
                    <th>NAMA PEMESAN</th>
                    <th>PROVINSI</th>
                    <th>KOTA</th>
                    <th>TANGGAL</th>
                    <th>STATUS</th>
                    <th width="150px">AKSI</th>

                </tr>
            </thead>
            <tbody>

                <?php $i = 1;
                foreach ($pesanan as $data_pesanan) : ?>
                    <tr class="tr-shadow">
                        <td>
                            <?php echo $i;
                            $i++ ?>
                        </td>
                        <td>
                            <?php echo $data_pesanan->nama_pemesan ?>
                        </td>
                        <td>
<<<<<<< HEAD
                            <?php echo $data_pesanan->provinsi ?>
                        </td>
                        <td>
                            <?php echo $data_pesanan->kota ?>
                        </td>
                        <td>
                            <?php echo $data_pesanan->tanggal ?>
                        </td>
                        <td>
                            <?php echo $data_pesanan->kontak ?>
=======
                            <?php echo ucfirst(strtolower($data_pesanan->kota->nama_kabkota)) ?>
>>>>>>> b6bbba3fc2a19384103b20ac574b82891438d05d
                        </td>
                        <td>
                            <?php $originalDate = $data_pesanan->tanggal;
                            $newDate = date("d-m-Y", strtotime($originalDate));
                            echo $newDate; ?>
                        </td>
                        <td>
                            <?php if ($data_pesanan->status->id_status_pesanan == 'ST01') : ?>
                                <button class="btn btn-warning" type="button" title="Edit">
                                    Respon pesanan
                                </button>
                            <?php elseif ($data_pesanan->status->id_status_pesanan == 'ST02') : ?>
                                <button class="btn btn-secondary" type="button" title="Edit">
                                    Pesanan selesai
                                </button>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div>
                                <button onclick="deleteConfirm('<?php echo site_url('admin/pesanan/delete/' . $data_pesanan->id_pesanan) ?>')" type="button" class="btn btn-danger" onclick="">Hapus</button>
                                <button type="button" onclick="window.location.href='<?php echo base_url('admin/pesanan/infoPesanan/' . $data_pesanan->id_pesanan) ?>'" class="btn btn-info">Info</button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table> <br>
    </div>
</div>